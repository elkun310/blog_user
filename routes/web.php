<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// truyền tham số trên route
Route::get('{name0}/xinchao/{name?}',function($name0,$name="Đây là tham số mặc định"){
    echo "$name0 xin chào $name";
});
//view
// Route::get('/user', function () {
//     return view('user.user');
// });

//controller
Route::get('/','userController@getUser')->name('MyRoute');
Route::get('/add','userController@GetAddUser');
Route::post('/add','userController@PostAddUser');
Route::get('/edit/{idUser}','userController@GetEditUser');
Route::post('/edit/{idUser}','userController@PostEditUser');
Route::get('del-user/{idUser}','userController@delUser');



Route::get('hoten/{name}/{age}', function ($name,$age) {
    echo "ho va ten : $name";
    echo "<br>Tuoi: $age";
})->where(['name'=>'[a-zA-Z]+']);

//dinh danh cho route
Route::get('/aaaa', function () {
})->name('a');
Route::get('demo', function () {
    return redirect()->route('route_user');
});
Route::get('xinchao/{name}','MyController@hello');

//url tren request
Route::get('MyRequest','MyController@GetUrl');
Route::get('getForm',function(){
    return view('postForm');
});
Route::post('postForm',['as'=>'postForm','uses'=>'MyController@postForm']);

Route::get('/demo', function () {
    return view('demo_form');
});
Route::post('/demo', 'MyController@postDemo');
//add
Route::get('model-add', function () {
    $users = new App\models\users;
    $users->full='hadz';
    $users->phone='016969969';
    $users->address='Ha Noi';
    $users->id_number='311097';
    $users->save();
    echo $users->id;
    echo "đã thêm thành công";
});
//edit
Route::get('model-edit', function () {
    $users = App\models\users::find(52);
    $users->full='nguyễn quốc hà';
    $users->phone='111111';
    $users->address='Ha Noi';
    $users->id_number='311097';
    $users->save();
    echo "đã sửa thành công";
});
//delete
Route::get('model-del', function () {
    //xóa một bản ghi
    App\models\users::destroy(51);
    
    // xóa nhiều bản ghi --> truyen vao mang
    //App\models\users::destroy([48,49,50]);
    echo "đã xóa thành công";
});
