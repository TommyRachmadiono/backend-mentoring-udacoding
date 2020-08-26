<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dictionary;

class DictionaryController extends Controller
{
    public function index()
    {
        $dictionaries = Dictionary::all();
        return response()->json([
            'msg' => 'success',
            'dictionaries' => $dictionaries,
        ], 200);
    }
}
