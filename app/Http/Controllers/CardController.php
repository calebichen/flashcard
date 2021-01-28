<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;

class CardController extends Controller
{
    //
    public function index()
    {
        return view('cards.index');
    }

    public function create()
    {
        return view('cards.addCard');
    }

    public function store(Request $request)
    {
        $request->validate([
            'front1' => 'required|min:3|',
            'back1' => 'required|min:3'
        ]);

        $card =  new Card();
        $card->front_1 = $request->input('front1');
        $card->front_2 = $request->input('front2');
        $card->front_3 = $request->input('front3');
        $card->back_1 = $request->input('back1');
        $card->back_2 = $request->input('back2');
        $card->back_3 = $request->input('back3');
        //$card->save();

        return redirect()->route('cards.index');
        //return redirect()->route('cards.index', ['card_id' => $card->id]);
    }


}
