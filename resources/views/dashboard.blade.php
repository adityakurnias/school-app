@extends('layouts.main')
@section('title', 'Dashboard Admin')
@section('content')
    <div class="dashboard-content">
        <div class="admin-header">
            <h1>👨‍💼 Dashboard Admin</h1>
            <p>Halo, <b>{{ $namaAdmin ?? 'Administrator' }}</b>! Selamat datang di panel administrasi Aplikasi Web
                Sekolah.</p>
        </div>

        <div class="card filled-card">
            <h2>Statistik Sekolah</h2>
            <ul class="stats-list">
                <li>
                    <span class="material-icons stat-icon">people</span>
                    Total Siswa
                    <span class="stat-value">{{ $jumlahSiswa }}</span>
                </li>
                <li>
                    <span class="material-icons stat-icon">school</span>
                    Total Guru & Staf
                    <span class="stat-value">{{ $jumlahGuru }}</span>
                </li>
                <li>
                    <span class="material-icons stat-icon">class</span>
                    Jumlah Kelas
                    <span class="stat-value">30+</span>
                </li>
            </ul>
        </div>

        <div class="card">
            <h2>🔧 Panel Administrasi</h2>
            <p>Nanti di sini akan ada ringkasan data penting dan fitur-fitur administrasi.</p>
        </div>
    </div>
@endsection
