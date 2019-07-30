<?php

namespace App\Http\Controllers;
// get namespace from request validation
use  App\Http\Requests\addUserRequest;
use  App\Http\Requests\editUserRequest;
use Illuminate\Http\Request;
use App\models\users;

class userController extends Controller
{
    function getUser(){
        //lấy dữ liệu trong bảng users bằng phương thức all()
        //$users=users::all();
        
        //dd($users);
        //key trong data là biến ở bên view
        //đây là phân trang trong laravel
        $data['users']=users::paginate(8);
        //$data['users']=$users;
        
        //truyen sang view key la bien
        return view('user.user',$data);
    }
    function GetAddUser(){
        return view('user.add_user');
    }
    function GetEditUser($idUser){
        $data['user']=users::find($idUser);
        
        return view('user.edit_user',$data);
    }
    function delUser($idUser){
        users::destroy($idUser);
        echo "delete successfull";
        return redirect()->route('MyRoute');
    }
    function PostAddUser(addUserRequest $r){
        //bug-->hien thi du lieu
        //dd($r->all());
        // echo $r->full;
        //structure
            //$r->validate([quy_tac],[thongbao_tuong_ung]);
        //key-> name cua o input can kiem tra
        //value-> cac quy tac danh cho o input do
        //$r->validate($rules,$messages);
        // echo"xu ly";

        // xử lý điền vào form insert vào db
        $users = new users;
        $users->full=$r->full;
        $users->phone=$r->phone;
        $users->address=$r->address;
        $users->id_number=$r->id_number;
        $users->save();
        echo "đã thêm thành công";
        //return redirect()->route('MyRoute');
    }
    function PostEditUser($idUser,editUserRequest $r){
        $users = users::find($idUser);
        $users->full=$r->full;
        $users->phone=$r->phone;
        $users->address=$r->address;
        $users->id_number=$r->id_number;
        $users->save();
        echo "đã sửa thành công";
        // return redirect()->route('MyRoute');
        return redirect('/')->with('thongbao','Đã sửa thành công!');
    }
}
