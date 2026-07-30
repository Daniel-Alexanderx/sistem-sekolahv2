<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $title = 'Sistem Sekolah | Daftar Siswa';
        $students = [
            [
                'id' => 1,
                'nis' => 1001,
                'name' => 'Andi',
                'class' => 'XII TKJ II',
                'major' => 'TKJ'
            ],
            [
                'id' => 2,
                'nis' => 1002,
                'name' => 'Budi',
                'class' => 'XII TKJ I',
                'major' => 'TKJ'
            ],
        ];

        return view('students.index', [
            'title' => $title,
            'students' => $students
        ]);
    }

    public function show(string $id)
    {
        $title = 'Sistem Sekolah | Detail Siswa';
        return view('students.show', [
            'title' => $title
        ]);
    }

    public function create()
    {
        $title = 'Sistem Sekolah | Menambah Siswa';
        return view('students.create',[
            'title' => $title
        ]);
    }

    public function edit(string $id)
    {
        $title = 'Sistem Sekolah | Mengubah Data Siswa';
        return view('students.edit', [
            'title' => $title
        ]);
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



