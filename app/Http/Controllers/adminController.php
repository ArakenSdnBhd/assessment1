<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Question;

class adminController extends Controller
{
    public function questList(){
    	$users = User::all();

    	return view('adminhome', compact('users'));

    }

    public function addQuest(Request $request){
    	$quest = new Question;
        $quest->quest = $request->input('quest');
        $quest->a1 = $request->input('a1');
        $quest->a2 = $request->input('a2');
        $quest->a3 = $request->input('a3');
        $quest->a4 = $request->input('a4');
        $quest->answer = $request->input('answer');
        $quest->save();

        return redirect()->to('/');
    }

    public function updatePage(Request $request){
    	$quest = Question::find($request->input('quest'));
    	return view('updatePage', compact('quest'));
    }

    public function updateQuest(Request $request){
    	$quest = Question::find($request->input('quest'));
    	 $quest->quest = $request->input('quest');
        $quest->a1 = $request->input('a1');
        $quest->a2 = $request->input('a2');
        $quest->a3 = $request->input('a3');
        $quest->a4 = $request->input('a4');
        $quest->answer = $request->input('answer');
        $quest->save();

        return redirect()->to('/');

    }

    public function deleteQuest(Request $request){
    	$quest = Question::find($request->input('quest'));
    	$quest->delete();

    	return redirect()->to('/');
    }

}
