<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\User;
use App\Models\Section;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class QuestionsController extends Controller
{
    public function createQuestion(Section $section)
    {
        $section = $section;
        return view('admins.create_question', compact('section'));
    }

    public function detailQuestion(Question $question)
    {
        $answers = $question->answers()->paginate(10);
        return view('admins.detail_question', compact('question', 'answers'));
    }

    public function editQuestion(Question $question)
    {
        $answers = $question->answers()->get();
        return view('admins.edit_question', compact('question', 'answers'));
    }

    public function storeQuestion(Section $section, Request $request)
    {
        $section = $section;
        $data = $request->validate([
            'question' => ['required', Rule::unique('questions')],
            'explanation' => 'required',
            'is_active' => 'required',
            'answers.0.answer' => 'required',
            'answers.*.is_checked' => 'present'
        ]);


        $question = Question::create([
            'question' => $request->question,
            'explanation' => $request->explanation,
            'is_active' => $request->is_active,
            'user_id' => Auth::id(),
            'section_id' => $section->id,
        ]);

        $status = $question->answers()->createMany($data['answers'])->push();
        return redirect()->route('detailSection', $section->id)
            ->withSuccess('Question created successfully');;
    }


    public function updateQuestion(Question $question, Request $request){

        $record = Question::findOrFail($question->id);
        $question = $request->question;
        $answers = $request->answers;
        $record->update($question);

        foreach($answers as $key => $answer) {
          $answer =  Answer::where('id', '=', $key)->update($answers[$key]);
        }

        session()->flash('success', 'Question update successfully!');
        return redirect()->route('detailSection', ['section' => $record->section_id]);
    }
    function deleteQuestion($id)
    {
        $question = Question::findOrFail($id);
        $question->delete();
        return redirect()->route('detailSection', $question->section->id)
            ->withSuccess('Question with id: ' . $question->id . ' deleted successfully');
    }
}
