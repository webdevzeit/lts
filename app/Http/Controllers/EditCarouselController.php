<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carousel;

class EditCarouselController extends Controller
{
           public function edit(Request $request,Carousel $carousel,$id){
        $carousel = carousel::find($id);

        if($request->isMethod('post')) {

            $input = $request->except('_token');
            
            if($request->hasFile('img')) {
                 $random = mt_rand(1,8888);
                $file = $request->file('img');
                $file->move(public_path().'/img/',$random.$file->getClientOriginalName());
                $input['img'] = $random.$file->getClientOriginalName();
                unlink(public_path().'/img/'.$input['old_img']);
                unset($input['old_img']);
            }
            else {
                $input['img'] = $input['old_img'];
            }
            
            
            
            $carousel->fill($input);
            
            if($carousel->update()) {
                return redirect('/admin/carousel')->with('status','Carousel Update');
            }
        }
          
         if($request->isMethod('get')) {
			$old = $carousel->toArray();
			$data = [
					'id' => $id,
					'carousel'=>$old
					];
			return view('admin.carousel_edit',$data);	
		}

        if ($request->isMethod('delete')) {
            unlink(public_path().'/img/'.$carousel['img']);
            $carousel->delete();
            return redirect('/admin/carousel')->with('status','Slider Delete');
        }
    }

}
