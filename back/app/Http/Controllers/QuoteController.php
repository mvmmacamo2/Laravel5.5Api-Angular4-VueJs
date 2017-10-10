<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quote;

class QuoteController extends Controller
{

    public function postQuote(Request $request)
    {

        $quote = new Quote();
        $quote->content = $request->input('content');
        $quote->save();
        return response()->json(['quote' => $quote], 201);
    }

    public function getQuote()
    {
        $quotes = Quote::all();
        $response = [
            'quotes' => $quotes
        ];
        return response()->json($response, 201);

    }


    public function putQuote(Request $request, $id)
    {

        $quote = Quote::find($id);
        if (!$quote) {
            return response()->json(['message'=>'Document not found']);
    }
        $quote->content = $request->input('content');
        $quote->save();
        return response()->json(['quote' => $quote], 201);

    }

    public function deleteQuote($id)
    {
        $quote = Quote::find($id);
        $quote->delete();
        return response()->json(['message'=>'Document not found'],200);
 }
}
