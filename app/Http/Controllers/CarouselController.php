<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Carousel;

class CarouselController extends Controller
{

		 public function add(Request $request){
        if($request->isMethod('POST')){
            $input = $request->except('_token');
            if($request->hasFile('img')){
                 $random = mt_rand(1,8888);
                $file = $request->file('img');
                $input['img'] = $random.$file->getClientOriginalName();
                $file->move(public_path().'/img/',$input['img']);
            }
            $carousel = new Carousel();
            $carousel->fill($input);
            if($carousel->save()){
                return redirect('/admin/carousel')->with('status','Slider added');
            }
        }


        return view('admin.add_carousel');
    }
}