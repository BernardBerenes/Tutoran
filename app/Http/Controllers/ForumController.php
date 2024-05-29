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

        if(auth('student')->check()){
            ForumQuestion::create([
                'StudentID' => auth('student')->user()->id,
                'Question' => $request->question
            ]);
        } else{
            ForumQuestion::create([
                'TutorID' => auth('tutor')->user()->id,
                'Question' => $request->question
            ]);
        }

        return redirect(route('ForumDiscussionPage'));
    }

    public function DeleteForumQuestion($QuestionID){
        ForumQuestion::findOrFail($QuestionID)->delete();

        return back();
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

        $question = ForumQuestion::findOrFail($QuestionID);
        $question->AnswerCount += 1;
        $question->save();

        return back();
    }
}
