<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.profile.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.profile.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $name = $request->input('name');
        $studentIdNumber = $request->input('studentIdNumber');
        $address = $request->input('address');

        dd($name, $studentIdNumber, $address);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.profile.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.profile.edit', ['id' => $id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $name = $request->input('name');
        $studentIdNumber = $request->input('studentIdNumber');
        $address = $request->input('address');

        dd($id, $name, $studentIdNumber, $address);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
