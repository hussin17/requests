<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //الفانكشن دى مسؤول عن جلب البيانات من الداتا بيز
    public function index()
    {
        // TODO: Get All Visa, embass
        $visa = DB::table('visa_types')->get();
        $embases = DB::table('embasss')->get();
        return view('idex', compact('visa', 'embases'));
    }

    /**
     * Show the form for creating a new resource.
     */
    //عرض البينات فى الرايسية 
    public function create()
    {
        return view('create');
    }


    //فانكشن بتضيف البينات من الفورمة فى الداتا بيز
    public function store(Request $request)
    {
        // dd($request);
        // Uploads Images
        $image = $request->file('src');
        $imageName = time() . '.' . $image->extension();

        // Moving Image To Uploads Folder
        $image->move(public_path('uploads'), $imageName);

        DB::table('requests')->insert([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'embass_id' => $request->embass_id,
            'visa_id' => $request->visa_id,
            'src' => $imageName
        ]);
        
        return redirect()->back()->with('success', 'تم اضافة البينات بنجاح');
    }

    //Display the specified resource.

    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = DB::table('requests')->where('id', $id)->first();
        return view('edit_create', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage. 
     *
     */
    public function delete($id)
    {
        DB::table('requests')->where('id' ,$id)->delete();
        return Redirect()->route('post');
    }
}

