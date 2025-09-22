<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class Admin extends Controller
{
    //
    public function uploadproduct (Request $req)
    {
        $table = new product();
        $table->productname = $req->productname;
        $table->productprice = $req->productprice;
        $table->productquantity = $req->productquantity;
        $table->productcategory = $req->productcategory;
        $file = $req->file('productimage');
         $fileName = time() . '_' . $file->getClientOriginalName();
          $file->move(public_path('uploads'), $fileName);
          $table->productimage = $fileName;
          $table->save();
          return redirect()->back();

    }
    public function getproducts()
    {
        $prod = product::get();
        return view('admin.viewproduct',compact('prod'));
    }
    public function delete($id)
    {
       $re = product::find($id);
       $re->delete();
        return redirect()->back();

    }

}
