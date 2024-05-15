<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\DataModel;
use Dflydev\DotAccessData\Data;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DataModel::orderBy("id","asc")->paginate(10);
        return view("show", ["data"=> $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($request);
        DataModel::create($data);
        return redirect()->route('data.create')->with('success', 'Data created successfully!');
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
        $item = DataModel::findOrFail($id);
        return view('edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'umur' => 'required|integer|min:0',
            'alamat' => 'required|string|max:255',
            'hobi' => 'nullable|string|max:255',
        ]);

        $item = DataModel::findOrFail($id);
        $item->update($request->all());

        return redirect()->route('data', $item->id)->with('success', 'Data updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = DataModel::findOrFail($id);
        $item->delete();

        return redirect()->route('data')->with('success', 'Data deleted successfully.');
    }
}
