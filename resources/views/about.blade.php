@extends('layouts.main')
@section('title', 'Tentang Kami')
@section('content')
    <div class="about-content">
        <div class="about-hero">
            <h1>Tentang {{ $namaAplikasi }}</h1>
            <p>Aplikasi ini dikembangkan oleh <b>{{ $pengembang }}</b>.</p>
            <div class="version-highlight">
                Versi {{ $tahun }}
            </div>
        </div>
    </div>
@endsection