<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    private array $students = [
        [
            'nama' => 'Wildan Humam Alpasya',
            'kelas' => 'B',
            'npm' => '2417051064',
        ],
        [
            'nama' => 'Budi Santoso',
            'kelas' => 'A',
            'npm' => '2417051001',
        ],
        [
            'nama' => 'Sari Dewi',
            'kelas' => 'C',
            'npm' => '2417051002',
        ],
    ];

    public function index()
    {
        return view('students.index', ['students' => $this->students]);
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'kelas' => 'required|string|max:20',
            'npm' => 'required|string|max:20',
        ]);

        $this->students[] = $validated;

        return redirect()->route('students.index')->with('success', 'Data mahasiswa berhasil ditambahkan.');
    }
}
