<?php

namespace App\Http\Controllers\Api;

use App\Comment;
use App\UserQuestion;
use App\Friend;
use App\UserInfo;
use Validator;
use Illuminate\Http\Request;
use Auth;
use App\User;
use Image;




class ApiController extends Controller{

    public function api_articles(){
        return response()->json(UserQuestion::get(),200);
    }

    public function api_articlesById($id){
        $articles = UserQuestion::find($id);
        if(is_null($articles)){
            return  response()->json(['error'=> true,'message'=>'not found'],404);
        }
        return response()->json($articles,200);
    }

    public function api_articlesSave(Request $req){
        $rules =[
            'subject' => 'required',
            'message' => 'required'
        ];
        $validator = Validator::make($req->all(),$rules);
        if ($validator->fails()){
            return response()->json($validator->errors(),400);
        }
        $articles = UserQuestion::create($req->all());
        try {
            $user = auth()->userOrFail();
        }catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e){
            return response()->json(['error'=> true, 'message'=>$e->getMessage()],401);
        }
        return response()->json($articles,201);
    }

    public function api_articlesEdit(Request $req,UserQuestion $id){
        $articles = UserQuestion::find($id);
        if(is_null($articles)){
            return  response()->json(['error'=> true,'message'=>'not found'],404);
        }
        $rules =[
            'subject' => 'required',
            'message' => 'required'
        ];
        $validator = Validator::make($req->all(),$rules);
        if ($validator->fails()){
            return response()->json($validator->errors(),400);
        }
        try {
            $user = auth()->userOrFail();
        }catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e){
            return response()->json(['error'=> true, 'message'=>$e->getMessage()],401);
        }
        $id->update($req->all());
        return response()->json($id,200);
    }

    public function api_articlesDelete(Request $req,UserQuestion $id){
        $articles = UserQuestion::find($id);
        if(is_null($articles)){
            return  response()->json(['error'=> true,'message'=>'not found'],404);
        }
        try {
            $user = auth()->userOrFail();
        }catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e){
            return response()->json(['error'=> true, 'message'=>$e->getMessage()],401);
        }
        $id->delete();
        return response()->json('',204);
    }

    //////////////////////////////////////////////////////////////////////////////////////

    public function api_comments(){
        return response()->json(Comment::get(),200);
    }

    public function api_commentsById($id){
        $comments = Comment::find($id);
        if(is_null($comments)){
            return  response()->json(['error'=> true,'message'=>'not found'],404);
        }
        return response()->json($comments,200);
    }

    public function api_commentsSave(Request $req){
        $rules =[
            'message' => 'required'
        ];
        $validator = Validator::make($req->all(),$rules);
        if ($validator->fails()){
            return response()->json($validator->errors(),400);
        }
        $comments = Comment::create($req->all());
        try {
            $user = auth()->userOrFail();
        }catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e){
            return response()->json(['error'=> true, 'message'=>$e->getMessage()],401);
        }
        return response()->json($comments,201);
    }

    public function api_commentsEdit(Request $req,Comment $id){
        $comments = Comment::find($id);
        $rules =[
            'message' => 'required'
        ];
        $validator = Validator::make($req->all(),$rules);
        if ($validator->fails()){
            return response()->json($validator->errors(),400);
        }
        if(is_null($comments)){
            return  response()->json(['error'=> true,'message'=>'not found'],404);
        }
        try {
            $user = auth()->userOrFail();
        }catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e){
            return response()->json(['error'=> true, 'message'=>$e->getMessage()],401);
        }
        $id->update($req->all());
        return response()->json($id,200);
    }

    public function api_commentsDelete(Request $req,Comment $id){
        $comments = Comment::find($id);
        if(is_null($comments)){
            return  response()->json(['error'=> true,'message'=>'not found'],404);
        }
        try {
            $user = auth()->userOrFail();
        }catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e){
            return response()->json(['error'=> true, 'message'=>$e->getMessage()],401);
        }
        $id->delete();
        return response()->json('',204);
    }

    //////////////////////////////////////////////////////////////////////////////////////

    public function api_users(){
        return response()->json(User::get(),200);
    }
    public function api_userById($id){
        return response()->json(User::find($id),200);
    }

    public function  api_login(Request $request){
        $creds = $request->only(['email','password']);
        if (!$token = auth()->attempt($creds)){
            return response()->json(['error'=>true, 'message'=>'Incorrect Login/Password'],401);
        }
        return response()->json(['token'=>  $token]);
    }
    public function  api_refresh(Request $request){
        try {
            $token = auth()->refresh();
        }catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e){
            return response()->json(['error'=>true, 'message'=>$e->getMessage()],401);
        }
        return response()->json(['token'=>$token]);

    }


}
