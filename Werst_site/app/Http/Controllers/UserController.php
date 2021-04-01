<?php

namespace App\Http\Controllers;

use App\Friend;
use Auth;
use App\User;
use Image;
use App\UserInfo;
use Illuminate\Http\Request;




class UserController extends Controller{

    public function profile(){
        $userId = Auth::id();
        $userinfo = User::find($userId)->userinfo;
        return view('profile',array('user' => Auth::user()) ,['userinfo'=>$userinfo]);
    }

    public function user_search(){
        $us = Auth::user();
        $users = User::all();
        return view('user_search', array('users'=>$users),['us'=>$us]);
    }

    public function user_page($id){
        $userId = Auth::id();
        $userinfo = User::find($userId)->userinfo;
        $friend_info = Friend::find(43)->friend_info;
        $user = User::select(['id','name','avatar'])->where('id',$id)->get();
        $friends = Friend::where('status','=',2)->where('user_B', '=',$id)->get();
        return view('user_page',['friends'=>$friends,'userinfo'=>$userinfo,'friend_info'=>$friend_info])->with(['user'=>$user]);
    }

    public function user_friends($id){
        $userId = Auth::id();
        $userinfo = User::find($userId)->userinfo;
        $friend_info = Friend::find(43)->friend_info;
        $user = User::select(['id','name','avatar'])->where('id',$id)->get();
        $friends = Friend::where('status','=',2)->where('user_B', '=',$id)->get();
        return view('user_friends',['friends'=>$friends,'userinfo'=>$userinfo,'friend_info'=>$friend_info])->with(['user'=>$user]);
    }



    public function update_avatar(Request $request){

        // Handle the user upload of avatar
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

        return view('profile_setting', array('user' => Auth::user()) );

    }

    public function profile_setting(){
        $users = new User();
        return view('profile_setting', array('user' => Auth::user()) );
    }

    public function profile_setting_check( Request $request){
        $user_id = Auth::id();
        $user = Auth::user();
        $valid = $request->validate([
            'age' => 'required',
            'country' => 'required',
            'city' => 'required',
            'hobby' => 'required'
        ]);

        $information = new UserInfo();

        $information->user_id = $request->query('user_id',"{$user->id}");
        $information->age = $request->input('age');
        $information->country = $request->input('country');
        $information->city = $request->input('city');
        $information->hobby = $request->input('hobby');

        $information->save();

//        $information = UserInfo::find($user_id);
//        $information->user_id = $request->input('user_id');
//        $information->age = $request->input('age');
//        $information->country = $request->input('country');
//        $information->city = $request->input('city');
//        $information->hobby = $request->input('hobby');
//
//        $information->save();
//        $update = UserInfo::where('id',$userId)
//           ->update(['age'=>$update->age,'country'=>$update->country,'city'=>$update->city,'hobby'=>$update->hobby]);

        return redirect()->route('profile');
    }

    public function friends_check( Request $request){
        $user_A = Auth::user();
        $users = User::all();
        $valid = $request->validate([
//            'user_B' => 'required',
            'status' => 'required'
        ]);

        $fried_status = new Friend();

        $fried_status->user_A = $request->query('$user_A', "{$user_A->id}");
        $fried_status->user_B = $request->input('user_B');
        $fried_status->status = $request->input('status');


        $fried_status->save();

        return redirect()->route('user_search');
    }

    public function friends_check_true( Request $request){

        $valid = $request->validate([
            'status' => 'required'
        ]);

        $fried_status = Friend::where(['user_A' => $request->input('user_A'), 'user_B' => $request->input('user_B')])->first();

        $fried_status->user_A = $request->input('user_A');
        $fried_status->user_B = $request->input('user_B');
        $fried_status->status = $request->input('status');

        $fried_status->save();

        return redirect()->route('friends');
    }

    public function friends_check_false( Request $request){

        $valid = $request->validate([
            'status' => 'required'
        ]);

        $fried_status = Friend::where(['user_A' => $request->input('user_A'), 'user_B' => $request->input('user_B')])->first();

        $fried_status->user_A = $request->input('user_A');
        $fried_status->user_B = $request->input('user_B');
        $fried_status->status = $request->input('status');

        $fried_status->delete();

        return redirect()->route('friends');
    }

    public function friends(){
        $requests = Friend::where('status','=',1)->where('user_B', '=', Auth::user()->id)->get();
        $friends = Friend::where('status','=',2)->where('user_B', '=', Auth::user()->id)->get();
        $friend_info = Friend::find(43)->friend_info;
        return view('friends',['requests'=>$requests,'friends'=>$friends,'friend_info'=>$friend_info]);
    }


}
