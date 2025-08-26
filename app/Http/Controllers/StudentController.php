<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Metode untuk menampilkan semua data siswa.
     * Ini adalah aksi untuk operasi 'Read'.
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }
    /**
     * Metode untuk menampilkan form penambahan data siswa.
     * Ini adalah bagian dari operasi 'Create'.
     */
    public function create()
    {
        return view('students.create');
    }
    /**
     * Metode untuk menyimpan data baru yang dikirim dari form.
     * Ini adalah bagian dari operasi 'Create'.
     */
    public function store(Request $request)
    {
        Student::create($request->all());
        return redirect('/students')->with('success', 'Data siswa berhasil
ditambahkan!');
    }
    /**
     * Metode untuk menampilkan form pengeditan data siswa.
     * Ini adalah bagian dari operasi 'Update'.
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }
    /**
     * Metode untuk memperbarui data yang sudah ada.
     * Ini adalah bagian dari operasi 'Update'.
     */
    public function update(Request $request, Student $student)
    {
        $student->update($request->all());
        return redirect('/students')->with('success', 'Data siswa berhasil
diperbarui!');
    }
    /**
     * Metode untuk menghapus data siswa.
     * Ini adalah operasi 'Delete'.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect('/students')->with('success', 'Data siswa berhasil
dihapus!');
    }
}