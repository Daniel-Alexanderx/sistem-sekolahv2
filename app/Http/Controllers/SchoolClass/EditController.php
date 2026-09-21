<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $title = "Sistem Sekolah | Edit Kelas";
        $class = [
            'id' => 1,
            'name' => 'XII AKL 1',
            'grade' => 'XII',
            'major_id' => 1,
            'teacher_id' => 1,
        ];

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

        return view('classes.edit', [
            'title' => $title,
            'class' => $class,
            'majors' => $majors,
            'teachers' => $teachers
        ]);


    }
}