<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function calculate(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric'
        ]);

        $amount = $request->amount;

        $amountMade = ($amount * 50)/12;
        
        return response()->json([
            'status' => 'success',
            'data' => $amountMade
        ],200);
    }
}
