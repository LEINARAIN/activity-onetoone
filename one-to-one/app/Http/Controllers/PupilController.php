<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PupilController;
use App\Models\Pupil;

use Illuminate\Http\Request;

class PupilController extends Controller
{
    public function index () {
        $pupils = Pupil::with('scholastic')->get();
        return response()->json(['pupils' => $pupils]);
    }

    public function store (Request $request) {
        $pupil = Pupil::create($request->all());
        $pupil -> scholastic()->create($request->input('scholastic')); 
        return response()->json($pupil, 201);   
    }

    public function update (Request $request, $id) {
        $pupil = Pupil::find($id);
        $pupil -> update($request->all());
        $pupil -> scholastic()->update($request->input('scholastic'));
        return response()->json(['pupil'=> $pupil]);
    }

    public function destroy ($id) {
        $pupil = Pupil::find($id);
        $pupil -> scholastic()-> delete();
        $pupil -> delete();
        return response()->json(['message'=> "na-delete mo na!!"]);
    }
}
