<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    // Get the answer to the faq question 
    public function answers($questionId)
    {
        $question = FAQ::where('id',$questionId)->first();

        $answer = $question->answer;

        return response()->json([
            'status' => 'success',
            'data' => $answer
        ],200);
    }

    // Get all faqs
    public function getAll()
    {
        $faq = FAQ::all();

        return response()->json([
            'status' => 'success',
            'data' => $faq
        ],200);
    }
}
