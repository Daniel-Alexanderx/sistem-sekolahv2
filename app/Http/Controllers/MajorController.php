<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "Ini adalah halaman Jurusan";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "Ini adalah halaman tambah Jurusan";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "Menambah data Jurusan baru";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "Menampilkan data Jurusan dengan ID: {$id}";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "Ini adalah halaman edit Jurusan dengan ID: {$id}";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "Mengubah data Jurusan dengan ID: {$id}";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Menghapus data Jurusan dengan ID: {$id}";
    }
}
