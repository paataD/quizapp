<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Section;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index(){
        $quizes = Section::get();

        return view('welcome', compact('quizes'));
    }
}
