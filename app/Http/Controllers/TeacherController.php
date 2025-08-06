<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function listTeacher() {
        $guru = [
            'Pak Anto',
            'Pak Sulthan',
            'Pak Fiet',
            'Bu Maya'
        ];

        return view('teacher.index', compact('guru'));
    }
}
