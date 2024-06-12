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
        ], [
            'question.regex' => 'Pertanyaan forum minimal 5 kata'
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
        $request->validate([
            'answer' => 'required'
        ], [
            'answer.required' => 'Jawaban tidak boleh kosong' 
        ]);

        if(auth('student')->check()){
            ForumAnswer::create([
                'QuestionID' => $QuestionID,
                'StudentID' => auth('student')->user()->id,
                'Answer' => $request->answer
            ]);
        } else{
            ForumAnswer::create([
                'QuestionID' => $QuestionID,
                'TutorID' => auth('tutor')->user()->id,
                'Answer' => $request->answer
            ]);
        }

        $question = ForumQuestion::findOrFail($QuestionID);
        $question->increment('AnswerCount');

        return back();
    }

    public function DeleteForumAnswer($QuestionID, $AnswerID){
        ForumAnswer::findOrFail($AnswerID)->delete();
        $question = ForumQuestion::findOrFail($QuestionID);
        $question->decrement('AnswerCount');

        return back();
    }
}
