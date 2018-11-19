<?php
 namespace App\Http\Controllers;
 use Illuminate\Http\Request;
use Route;
use View;
use App\Score;
 class BoardController extends Controller
{
    //
    public function getIndex()
    {
        //return View::make('board');
        $scores = Score::orderByTotal()
        -> orderBySubject() -> get();
        $data = ['scores' => $scores];
        return view('board', $data);

    }
}
 
