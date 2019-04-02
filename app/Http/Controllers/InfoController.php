<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;

class InfoController extends Controller
{

    public function edit(Request $request,Contact $contact){
    	$contact = Contact::find(1);

    	if($request->isMethod('post')) {

			$input = $request->except('_token');
			
			if($request->hasFile('favicon')) {
				$file = $request->file('favicon');
				$random = mt_rand(1,10);
				$file->move(public_path().'/img/',$random.$file->getClientOriginalName());
				$input['favicon'] = $random.$file->getClientOriginalName();
			}
			else {
				$input['favicon'] = $input['old_favicon'];
			}
			if(file_exists(public_path().'/img/'.$input['old_favicon']))
			{
			    unlink(public_path().'/img/'.$input['old_favicon']);
			    
			}else{
			    $status = "Nothing this img";
			}
			unset($input['old_favicon']);
			
			
			$contact->fill($input);
			
			if($contact->update()) {
				return redirect('/admin/info')->with('status','Info Update');
			}
		}
    	else{
    		$info = [
    		'info'=>$contact
    		];
    		return view('admin.info_edit',$info);
    	}
    }
 }
