<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return "Ini adalah halaman daftar siswa";
    }

    public function show(string $id)
    {
        return "Menampilkan detail siswa denga ID: {$id}";
    }

    public function create()
    {
        return "Ini adalah halaman tambah siswa";
    }

    public function edit(string $id)
    {
        return "Ini adalah halaman edit siswa dengan ID: {$id}";
    }

    public function store()
    {
        return "Menambah data siswa baru";
    }

    public function update(string $id)
    {
        return "Mengubah data siswa dengan ID: {$id}";
    }

    public function destroy(string $id)
    {
        return "Menghapus data siswa dengan ID: {$id}";
    }
}



