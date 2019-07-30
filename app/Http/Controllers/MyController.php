<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\demoFormRequest;
class MyController extends Controller
{
    public function hello($name){
        echo "xin chao cac ban.Minh la: $name";
        return redirect()->route('MyRoute');
    }
    public function GetUrl(Request $request){
        //return $request->url();
        if($request->isMethod('get')){
            echo "this is method get";
        }
        else{
            echo "this is not method get";
        }
    }
    public function postForm(Request $request){
        echo $request->hoten;
    }
    function postDemo(demoFormRequest $r){
        // $rules=[
        //     'mail'=>'required|email',
        //     'pass'=>'required|min:5',
        // ];
        // $messages=[
        //     'mail.required'=>'Mail là bắt buộc',
        //     'mail.email'=>'Định dạng mail không chính xác',
        //     'pass.required'=>'Mật khẩu không được để trống',
        //     'pass.min'=>'Mật khẩu dài hơn 5 ký tự',
        // ];
        // $r->validate($rules,$messages);
        echo "dang xu ly";
    }
}
