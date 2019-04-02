<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carousel;
use App\Contact;
use App\Product;
use App\Service;
use App\Message;
use App\SocialLink;
use DB;

class IndexController extends Controller
{

	public function execute(){

        $carousel = Carousel::all()->toArray();
        $info = Contact::first()->toArray();
        $product_list = Product::all()->toArray();
        $service_list = Service::all()->toArray();
        $links = SocialLink::all()->toArray();
		return view('main',
            [
            'links'=>$links,    
            'maininfo' => $info,
            'sliders'=>$carousel,
            'products'=>$product_list,
            'services'=>$service_list

            ]);
	}

    public function SendMessage(Request $request){

       if($request->isMethod('post')){
                $input = $request->except('_token');
                $message = new Message();
                $message->fill($input);
                if($message->save()){
                    return redirect('/#message-anchor')->with('status','Thank You for message!!!');
                }
            }
    }
}
