<?php

namespace App\Http\Controllers;

use App\Models\addtocart;
use App\Models\contact;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class User extends Controller
{
    //
    public function contact(Request $req)
    {
        $table = new contact();
        $table->Firstname = $req->firstname;
        $table->Lastname = $req->lastname;
        $table->Email = $req->email;
        $table->Subject = $req->subject;
        $table->Message = $req->message;

        $table->save();

        return redirect('/contact');
    }
     public function fetch()
    {
       $rec = contact::get();
       return view('admin.contactqueries',compact('rec'));
    }
        public function deleterecord($userid)
    {
       $re = contact::find($userid);
       $re->delete();

       return redirect('/contactqueries');
    }
     public function getproducts()
    {
        $prod = product::get();
        return view('allproducts',compact('prod'));
    }
     public function addtocart($id,Request $req)
    {
       $product = product::find($id);
       $table = new addtocart();
       $table->userid = Auth::user()->id ;
       $table->productid = $id;
       $table->quantity = $req->quantity;
       $table->save();
       return redirect('/allproducts')->with('message','Product has been added');
        // return view('addtocart',compact('product'));
    }
    public function getitems()
    {
        $userid = Auth::user()->id;
        $product = addtocart::where('userid',$userid)->get();
        return view('addtocart',compact('product'));
    }

}
