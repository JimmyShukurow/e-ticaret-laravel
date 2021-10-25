<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $tests = Test::orderBy('created_at', 'DESC')->get();
        return $tests;
    }

    public function show($id)
    {
        $test = Test::find($id);
        return $test;
    }

    public function store(Request $request)
    {
        return Test::create([
            'name' => $request->name,
            'description' => $request->description
        ]);
    }

    public function update(Request $request, $id)
    {
        $test = Test::find($id);
        return $test->update([
            'name' => $request->name,
            'description' => $request->description
        ]);
    }

    public function destroy($id)
    {
        $test = Test::find($id);
        $test->delete();
        
        return ['status' => $test->delete()];
    }
}
