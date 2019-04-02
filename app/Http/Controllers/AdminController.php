<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Product;
use App\Service;
use App\Contact;
use App\Carousel;
use App\SocialLink;
use App\Message;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use DB;


class AdminController extends Controller
{
    public function show(Message $message,Request $request){

        $user = Auth::user();
    	return redirect('/admin/messages')->with('status','Welcome Back'.$user.'!');

    }

    public function add_link(Request $request){

            if($request->isMethod('post')){
                $input = $request->except('_token');
                $sociallink = new SocialLink();
                $sociallink ->fill($input);
                if($sociallink ->save()){
                   return redirect('/admin/social')->with('status','Social Link Added');
                }
            }


            return view('admin.add_link');
    }

    public function delete_link(Request $request,$id){
         if ($request->isMethod('post')) {
            $sociallink = SocialLink::find($id);
            $sociallink->delete();
            return redirect('/admin/social')->with('status','Delete Social Link');
        }

    }

    public function cheked(Request $request,$id){
            $message = Message::find($id);

            $input = $request->except('_token');
            
             $message->fill($input);
            
            if($message->update()) {
                return redirect('/admin/messages')->with('status','Viewed');
            }
             
    }

    public function view_messages(Request $request){
        if($request->isMethod('get')){
        $maininfo = Contact::first()->toArray();
        $messages =  DB::table('messages')->orderBy('created_at','desc')->get()->toArray();
        $nocheked = Db::table('messages')->where('status',null)->get()->count();
        $title = 'Messages';
        $data = [
            'messages'=>$messages,
            'nocheked'=>$nocheked,
            'maininfo'=>$maininfo,
        ];
        return view('admin.parts.messages',$data);
    }

        if ($request->isMethod('post')) {
            $input = $request->except('_token');
            $subject = $input['subject'];
            if($subject == ''){
                 $messages =  DB::table('messages')->orderBy('created_at','desc')->get()->toArray();
             }else{
                 $messages =  DB::table('messages')->where('subject',$subject)->orderBy('created_at','desc')->get()->toArray();
             }
            $maininfo = Contact::first()->toArray();
            $nocheked = Db::table('messages')->where('status',null)->get()->count();
            $data = [
            'messages'=>$messages,
            'nocheked'=>$nocheked,
            'maininfo'=>$maininfo,
        ];

            return view('admin.parts.messages',$data);
        }
    }

    public function view_info(){
        $maininfo = Contact::first()->toArray();
        $nocheked = Db::table('messages')->where('status',null)->get()->count();
        $data = [
            'nocheked'=>$nocheked,
            'maininfo'=>$maininfo
        ];
        return view('admin.parts.info',$data);
    }

     public function view_product(){
        $nocheked = Db::table('messages')->where('status',null)->get()->count();
        $product_list = Product::all()->toArray();
        $maininfo = Contact::first()->toArray();

        $data = [
            'nocheked'=>$nocheked,
            'products' => $product_list ,
            'maininfo'=>$maininfo
        ];
        return view('admin.parts.product',$data);
    }

     public function view_service(){
        $nocheked = Db::table('messages')->where('status',null)->get()->count();
        $maininfo = Contact::first()->toArray();
        $service_list = Service::all()->toArray();
        $data = [
            'nocheked'=>$nocheked,
            'services' => $service_list ,
            'maininfo'=>$maininfo
        ];
        return view('admin.parts.service',$data);
    }

    public function view_social(){
        $nocheked = Db::table('messages')->where('status',null)->get()->count();
        $maininfo = Contact::first()->toArray();
        $links = SocialLink::all()->toArray();
        $data = [
            'nocheked'=>$nocheked,
            'links'=>$links,
            'maininfo'=>$maininfo
        ];
        return view('admin.parts.social',$data);
    }

    public function view_carousel(){
        $nocheked = Db::table('messages')->where('status',null)->get()->count();
        $maininfo = Contact::first()->toArray();
        $carousel_item = Carousel::all()->toArray();
        $data = [
            'nocheked'=>$nocheked,
            'maininfo'=>$maininfo,
            'carousels' => $carousel_item
        ];
        return view('admin.parts.carousel',$data);
    }
    
}
