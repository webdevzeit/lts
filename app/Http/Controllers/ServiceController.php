<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Service;
use App\Contact;

class ServiceController extends Controller
{
    public function view($id){
    	$data = Service::find($id)->toArray();
    	$info = Contact::first()->toArray();
    	$service_id = $id;

    	return view('view_service',[

    		'maininfo'=>$info,
    		'service'=>$data
    	]);

    }

    public function add(Request $request){
        if($request->isMethod('post')){
            $input = $request->except('_token');
            if($request->hasFile('img')){
                $random = mt_rand(1,8888);
                $file = $request->file('img');
                $input['img'] = $random.$file->getClientOriginalName();
                $file->move(public_path().'/img/',$input['img']);
            }
            $service = new Service();
            $service->fill($input);
            if($service->save()){
                return redirect('/admin/service')->with('status','Service added');
            }
        }


        return view('admin.add_service');
    }
}
