<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Biodata;
use Illuminate\Support\Facades\Storage;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('landing', [
            'biodatas' => Biodata::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'prodi' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $randomString = Str::random(5);
            $name_file = $randomString . "_" . $file->getClientOriginalName();
            $file->storeAs('public/image/', $name_file);
            $validatedData['img'] = $name_file;
        };

        Biodata::create($validatedData);
        return redirect('/biodata');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $biodata = Biodata::find($id);
        return view('show', [
            'biodata' => $biodata
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $biodata = Biodata::find($id);
        return view('edit', [
            'biodata' => $biodata
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'nim' => 'nullable',
            'nama' => 'nullable',
            'email' => 'nullable',
            'phone' => 'nullable',
            'prodi' => 'nullable',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $randomString = Str::random(5);
            $name_file = $randomString . "_" . $file->getClientOriginalName();
            $file->storeAs('public/image/', $name_file);
            $validatedData['img'] = $name_file;
        };

        Biodata::where('id', $id)->update($validatedData);
        return redirect('/biodata');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = Biodata::find($id);
        Storage::delete('public/image/' . $image->img);
        $image->delete();
        return redirect('/biodata');
    }
}
