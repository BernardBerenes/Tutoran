<?php

namespace App\Http\Controllers;

use App\Models\ForumQuestion;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function AddForumQuestion(Request $request){
        // Validation
        ForumQuestion::create([
            'StudentID' => session('User')->id,
            'Question' => $request->question
        ]);

        return redirect(route('ForumDiscussionPage'));
    }

    public function AddForumAnswer(Request $request){

    }
}
