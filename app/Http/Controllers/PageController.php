<?php

namespace App\Http\Controllers;
use App\Models\Slide;
use App\Models\User;
use Session;
use Illuminate\Http\Request;
use App\Models\Product;
use Hash;
use Auth;
class PageController extends Controller
{
   public function getIndex(){
       $slide=Slide::all();
       
       return view('page.trangchu',compact('slide'));
   }
   public function getLoaiSp(){
    $new_product1=Product::where('id_type',
   @  5)->get();
    $new_product2=Product::where('id',2)->get();
    $new_product3=Product::where('id',3)->get();
    return view('page.loai_sanpham',compact('new_product1','new_product2','new_product3'));}
   public function getChitiet(){
    return view('page.chitiet_sanpham');
}
   public function getLienhe(){
    return view('page.lienhe');
}
 public function getLogin(){
     return view('page.login');
 }
 public function getSignin(){
     return view('page.dangki');
 }
 public function postSignin(Request $req){
     $this->validate($req,
         [
             'email'=>'required|email|unique:users,email',
             'password'=>'required|min:6|max:20',
             'fullname'=>'required',

         ],
         [
             'email.required'=>'vui long nhap email',
             'email.email'=>'khong dung dinh dang em email',
             'email.unique'=>'email da co nguoi su dung',
             'password.required'=>'vui long nhap may khau',
             'password.min'=>'mat khau it nhat 6 ky tu',
         ]);
         $user=new User();
         $user->full_name=$req->fullname;
         $user->email=$req->email;
         $user->password=Hash::make($req->password);
         
         $user->save();
         return redirect()->back()->with('thanhcong','tao tai khoan thanh cong');


 }
 public function postLogin(Request $req){
     $this->validate($req,
     [
         'email'=>'required|email',
         'password'=>'required|min:6|max:20',
     ],
     [
         'email.required'=>'vui long nhap email',
         'email.email'=>'Email khong dung dinh dang',
         'password.required'=>'vui long nhap mat khau',
         'password.min'=>'mat khau it nhat 6 ki tu',
         'password.max'=>'mat khau khong qua 20 ki tu',
     ]);
     $credentials=array('email'=>$req->email,'password'=>$req->password);
     if(Auth::attempt($credentials)){
        return redirect()->route('sau-login');
        
        
     }
     else{
        return redirect()->back()->with(['flag'=>'danger','message'=>'dang nhap khong thanh cong']);
     }

 }
 public function postLogout(){
     Auth::logout();
     return redirect()->route('trang-chu');
 }
 public function sauLogin(){
     return view('page.saulogin');
 }
 public function getSearch(Request $req){
     $product=Product::where('name','like','%'.$req->key.'%')
     ->orWhere('unit_price',$req->key)
     ->get();
     return view('page.search',compact('product'));
 }

}

