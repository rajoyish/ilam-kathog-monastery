<?php

namespace App\Http\Controllers;

use App\Models\Committee;
use Illuminate\Http\Request;

class IndexCommitteeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $committees = Committee::orderBy('order', 'asc')
            ->get();

        return view('committees.index', ['committees' => $committees]);
    }
}
