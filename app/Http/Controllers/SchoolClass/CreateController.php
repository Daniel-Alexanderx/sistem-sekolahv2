<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $teachers = [
            [
                'id' => 1,
                'name' => 'Budi Santoso',
            ],
            [
                'id' => 2,
                'name' => 'Siti Aminah',
            ],
        ];

        $majors = [
            [
                'id' => 1,
                'code' => 'AKL',
            ],
            [
                'id' => 2,
                'code' => 'TKJ',
            ],
            [
                'id' => 3,
                'code' => 'BD',
            ],
        ];

        $title = "Sistem Sekolah | Catat Kelas Baru";
        return view('classes.create', [
            'title' => $title,
            'teachers' => $teachers,
            'majors' => $majors
        ]);
    }
}