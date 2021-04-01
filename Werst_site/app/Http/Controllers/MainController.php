<?php

namespace App\Http\Controllers;

use App\ChatMessage;
use Auth;
use App\User;
use GuzzleHttp\Psr7\Message;
use Image;
use App\Comment;
use App\UserQuestion;
use Illuminate\Http\Request;

class MainController extends Controller{
    public function main(){
        return view('main');
    }

    public function text_editors(){
        return view('text_editors');
    }

    public function framework(){
        return view('framework');
    }

    public function courses(){
        return view('courses');
    }

    public function articles(){
        $question = new UserQuestion();
        return view('articles',array('user' => Auth::user()),['question' => $question->all()]);
    }

    public function review_check( Request $request){
        $user_id = Auth::user();
        $valid = $request->validate([
            'subject' => 'required',
            'message' => 'required|min:10'
        ]);

        $question = new UserQuestion();
        $question->user_id = $request->query('user_id',"{$user_id->id}");
        $question->subject = $request->input('subject');
        $question->message = $request->input('message');

        $question->save();

        return redirect()->route('articles');
    }

    public function show($id){
        $question = UserQuestion::select(['id','subject','message'])->where('id',$id)->get();
        return view('comments',array('user' => Auth::user()))->with(['question'=>$question]);
    }

    public function comments_check( Request $request){
        $user_id = Auth::user();
        $valid = $request->validate([
            'question_id' => 'required',
            'message' => 'required'
        ]);

        $comments = new Comment();
        $comments->user_id = $request->query('user_id',"{$user_id->id}");
        $comments->question_id = $request->input('question_id');
        $comments->message = $request->input('message');

        $comments->save();

        return redirect()->route('articles');
    }

    public function messenger(){
        return view('messenger');
    }
    public function messenger_user($id){
        $user_id = Auth::id();
        $recipient = User::select(['id','name','avatar'])->where('id',$id)->get();
        $message_creator = ChatMessage::where('creator_message','=',$user_id)->where('recipient','=',$id)->get();
        $message_recipient = ChatMessage::where('recipient','=',$user_id)->where('creator_message','=',$id)->get();
        return view('messenger_user',['id'=>$id,'message_recipient'=>$message_recipient,
            'message_creator'=>$message_creator,'recipient'=>$recipient]);

    }

    public function message_check(Request $request,$id){
        $user_id = Auth::id();
        $valid = $request->validate([
            'message' => 'required'
        ]);

        $messages = new ChatMessage();

        $messages->creator_message = $request->query('creator_message',"{$user_id}");
        $messages->recipient = $request->query('recipient',"{$id}");
        $messages->message = $request->input('message');

        $messages->save();
        return redirect()->route('messenger_user',"{$id}");
    }


}

