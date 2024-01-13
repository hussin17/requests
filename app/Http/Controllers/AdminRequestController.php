<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $requests = DB::table('requests')
            ->join('embasss', 'requests.embass_id', '=', 'embasss.id')
            ->join('visa_types', 'requests.visa_id', '=', 'visa_types.id')
            ->get(
                [
                    'requests.name as name',
                    'requests.video',
                    'requests.email',
                    'requests.phone',
                    'visa_types.name as visa_name',
                    'embasss.name as embase_name'
                ]
            );
        // dd($requests);
        return view('admin.requests.index', compact('requests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
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
     */
    public function destroy(string $id)
    {
        //
    }
}
