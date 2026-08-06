<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, string $id)
    {
        $title = 'Sistem Sekolah | Mengubah Data Kelas';
        return view('classes.edit', [
            'title' => $title
        ]);
    }
}
