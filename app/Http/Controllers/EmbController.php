<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmbController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $embases = DB::table('embasss')->get();
        return view('admin.embases.index', compact('embases'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.embases.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('embasss')->insert([
            'name' => $request->name
        ]);
        return redirect()->back()->with('success', 'تم الاضافة بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $embases = DB::table('embasss')->where('id', $id)->first();
        return view('admin.embases.edit', compact('embases'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('embasss')->where('id', $id)->update([
            'name' => $request->name
        ]);
        return redirect()->back()->with('success', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
