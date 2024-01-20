<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\error;

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
        $validator = $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'embass_id' => 'required',
            'visa_id' => 'required',
            'people_numbers' => 'required',
            'src' => 'required'
        ], [
            'name' => 'يرجى ادخال الاسم',
            'email' => 'يرجى ادخال الايميل',
            'phone' => 'يرجى ادخال رقم التليفون',
            'embass_id' => 'يرجى ادخال نوع السفارة',
            'visa_id' => 'يرجى ادخال نوع التاشيرة',
            'people_numbers' => 'يرجى ادخال الاشخاص',
            'src' => 'يرجى التاكد من عدد الصور',
        ]);

        // ! If People number <= images count ? continue Insert : Error
        if ($request->people_numbers <= count($request->file('src'))) {

            if ($request->file('video')) {
                // TODO: Upload Video
                $video = $request->file('video');
                $filename = time() . '.' . $video->extension();
                $video->move(public_path('uploads/videos'), $filename);
            }

            $request_id = DB::table('requests')->insertGetId([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'embass_id' => $request->embass_id,
                'visa_id' => $request->visa_id,
                'people_numbers' => $request->people_numbers,
                'video' => $request->video ? $filename : null
            ]);

            // Uploads Images
            foreach ($request->file('src') as $key => $value) {
                $image = $value;
                $imageName = time() . $key . '.' . $value->extension();
                $image->move(public_path('uploads/images'), $imageName);

                DB::table('request_images')->insert([
                    'name' => $imageName,
                    'request_id' => $request_id
                ]);
            }

            return redirect()->back()->with('success', 'تم اضافة البينات بنجاح');
        } else {
            return redirect()->back()->withErrors(['من فضلك تاكد من عدد الصور']);
        }
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
        DB::table('requests')->where('id', $id)->delete();
        return Redirect()->route('post');
    }
}
