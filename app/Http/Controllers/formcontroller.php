<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form;

class formcontroller extends Controller
{
    public function register(){
        return view('form');
}
public function data(Request $request){
    print_r($request->all());
    $request->validate([
       'name'=>'required',
       'email'=>'required | email',
       'password'=>'required'
    
    ]);
    $form=new form();
    $form->name=$request['name'];
    $form->email=$request['email'];
    $form->password=$request['password'];
    $form->save();
    return redirect('std/view');
 }
 public function std_view(){
     $stddata= form::all();
     // print_r($stddata);
     // dd($stddata);
     $data = compact ('stddata');
     return view ('std_view')->with($data);
 }
 public function std_dlt($id){
     //echo $id;
     $find = form::find($id)->delete();
     return redirect('std/view');
 }
 public function std_edit($id){
     $data=form::find($id);
     return view('form');

 }
 public function std_update($id,Request $request){
     $data=form::find($id);
     $data->name =$request('name');
     $data->email =$request('email');
     $data->password =$request('password');
     $data->save();
     return redirect('std/view-1');
 }

}