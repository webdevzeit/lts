<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Product;
class EditProductController extends Controller
{
        public function edit(Request $request,Product $product,$id){
        $product = Product::find($id);

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
            
            
            
            $product->fill($input);
            
            if($product->update()) {
                return redirect('/admin/product')->with('status','Product Update');
            }
        }
          
         if($request->isMethod('get')) {
			$old = $product->toArray();
			$data = [
					'id' => $id,
					'product'=>$old
					];
			return view('admin.product_edit',$data);	
		}
            if ($request->isMethod('delete')) {
            unlink(public_path().'/img/'.$product['img']);
            $product->delete();
            return redirect('/admin/product')->with('status','Product Delete');
        }
    }
}