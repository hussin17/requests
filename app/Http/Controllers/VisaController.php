<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visa = DB::table('visa_types')->get();
        return view('admin.visa.index', compact('visa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.visa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('visa_types')->insert([
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
        $visa = DB::table('visa_types')->where('id', $id)->first();
        return view('admin.visa.edit', compact('visa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('visa_types')->where('id', $id)->update([
            'name' => $request->name
        ]);
        return redirect()->back()->with('success', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // DB::table('requests')->where('visa_id', $id)->delete();
        // DB::table('visa_types')->where('id', $id)->delete();
        // return redirect()->back()->with('success', 'تم الحذف بنجاح');
    }
}
