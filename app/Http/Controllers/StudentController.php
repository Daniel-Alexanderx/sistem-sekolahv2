<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\Student\StoreRequest;
use App\Http\Requests\Student\UpdateRequest;
use Illuminate\Http\Request;
use Nette\Utils\IHtmlString;

class StudentController extends Controller
{
    public function index(request $request)
    {
        $title = 'Sistem Sekolah | Daftar Siswa';

        $search = $request->query('search');
        $class = $request->query('class');
        $major = $request->query('major');

        $students = Student::select(['id', 'nis', 'name', 'class', 'major'])
            ->when($search, function ($query, $search) {
                $query->where(function ($query) use ($search) {
                    $query->where('name', 'like', "%{$search}%")
                        ->orWhere('name', 'like', "%{$search}%");
                });
            })
            ->when($class, fn($query, $class) => $query->where('class', '=', $class))   
            ->when($major, fn($query, $major) => $query->where('major', '=', $major))
            ->paginate(10)
            ->withQueryString();


        $schoolClasses = ['10 AKL', '11 AKL', '11 TKJ 1', '11 TKJ 2', '10 BiD', '12 TKJ 1', '12 TKJ 2', '12 TKJ 3'];
        $majors = ['AKL', 'BiD', 'TKJ'];

        return view('students.index', [
            'title' => $title,
            'students' => $students,
            'classes' => $schoolClasses,
            'majors' => $majors
        ]);
    }

    public function show(Student $student)
    {
        $title = 'Sistem Sekolah | Detail Siswa';

        return view('students.show', [
            'title' => $title,
            'student' => $student
        ]);
    }

    public function create()
    {
        $title = 'Sistem Sekolah | Menambah Siswa';
        return view('students.create', [
            'title' => $title
        ]);
    }

    public function edit(Student $student)
    {
        $title = 'Sistem Sekolah | Mengubah Data Siswa';
        return view('students.edit', [
            'title' => $title,
            'student' => $student
        ]);
    }

    public function store(StoreRequest $request)
    {

        $validatedRequest = $request->validated();




        Student::create($validatedRequest);


        // Handle If Success

        return redirect()->route('students.index');

    }


    public function update(Student $student, UpdateRequest $request)
    {
        $validatedRequest = $request->validated();

        $student->update($validatedRequest);

        return redirect()->route('students.index');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index');
    }
}



