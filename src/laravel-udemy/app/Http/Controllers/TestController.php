<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Test;

class TestController extends Controller
{
    //

    public function index() {

        $values = Test::all();

        /* 
            $collection = collect([1, 2, 3, 4, 5, 6, 7]);
            $chunks = $collection->chunk(4);
            $chunks->toArray();
            dd($chunks);
        */

        // dd => die + var_dump(簡易的な確認)
        // dd($values);

        $tests = DB::table('tests')->get();
        dd($tests);

        return view('tests.test', compact('values'));

    }
}
