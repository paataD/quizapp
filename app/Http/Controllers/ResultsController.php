<?php

namespace App\Http\Controllers;

use App\Models\Result;
use App\Models\Section;
use Illuminate\Http\Request;

class ResultsController extends Controller
{
    public function createResult(Section $section)
    {

        return view('admins.create_result', compact('section'));
    }

    public function detailResult(Result $result)
    {
        $answers = $question->answers()->paginate(10);
        return view('admins.detail_question', compact('question', 'answers'));
    }

    public function storeResult(Section $section, Request $request)
    {
        $data = $request->all();
        $section->results()->create($data);
        return redirect()->route('listSection')->with('success', 'Section created successfully!');
    }

}
