<?php

namespace App\Http\Controllers;

use App\Models\tempat;
use App\Http\Requests\StoretempatRequest;
use App\Http\Requests\UpdatetempatRequest;
use App\Models\category;

class TempatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tempat', [
            'title' => 'Tempat',
            'active' => 'tempat',
            'tempat' => tempat::all()
        ]);
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
    public function store(StoretempatRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(tempat $tempat)
    {
        return view('detail', [
            'title' => 'Tempat',
            'active' => 'tempat',
            'tempat' => $tempat
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function showKategori(category $category)
    {
        return view('kategori', [
            'title' => $category['namaKategori'],
            'active' => 'tempat',
            'tempat' => tempat::show($category['namaKategori'])
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tempat $tempat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatetempatRequest $request, tempat $tempat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tempat $tempat)
    {
        //
    }
}
