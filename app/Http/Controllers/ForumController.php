<?php

namespace App\Http\Controllers;

use App\Models\ForumAnswer;
use App\Models\ForumQuestion;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function AddForumQuestion(Request $request){
        $request->validate([
            'question' => 'required|regex:/(\w+\s){4,}\w+/'
        ]);

        ForumQuestion::create([
            'StudentID' => auth(strtolower(session('Roles')))->user()->id,
            'Question' => $request->question
        ]);

        return redirect(route('ForumDiscussionPage'));
    }

    public function AddForumAnswer(Request $request, $QuestionID){
        // $request->validate([
        //     'answer' => 'required|regex:/(\w+\s){4,}\w+/'
        // ]);

        ForumAnswer::create([
            'QuestionID' => $QuestionID,
            'StudentID' => auth('student')->user()->id,
            'Answer' => $request->answer
        ]);

        return back();
    }
}
