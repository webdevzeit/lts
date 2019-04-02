<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;
use App\Service;

class EditServiceController extends Controller
{
      public function edit(Request $request,Service $service,$id){
        $service = Service::find($id);

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
            $service->fill($input);
            
            if($service->update()) {
                return redirect('/admin/service')->with('status','Service Update');
            }
        }
          
         if($request->isMethod('get')) {
			$old = $service->toArray();
			$data = [
					'id' => $id,
					'service'=>$old
					];
			return view('admin.service_edit',$data);	
		}
            if ($request->isMethod('delete')) {
            unlink(public_path().'/img/'.$service['img']);
            $service->delete();
            return redirect('/admin/service')->with('status','Service Delete');
        }
    }
}
