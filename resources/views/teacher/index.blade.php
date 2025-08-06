@extends('layouts.main')
@section('title', 'List Guru')
@section('content')
    <div class="card filled-card">
        <h2>List Guru Produtif RPL</h2>
        <ul class="stats-list">
            @foreach ($guru as $g)
                <li>
                    <span class="material-icons stat-icon">school</span>
                    {{ $g }}
                </li>
            @endforeach
        </ul>
    </div>
@endsection
