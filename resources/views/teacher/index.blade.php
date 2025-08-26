<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Guru</title>
    
    <link rel="stylesheet" href="{{ asset('/style/app.css') }}">
    <style>
        .btn-3d {
            background: linear-gradient(145deg, #4f46e5, #3b82f6);
            box-shadow: 0 6px 0 #1e3a8a, 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: all 0.15s ease-in-out;
        }

        .btn-3d:active {
            transform: translateY(4px);
            box-shadow: 0 2px 0 #1e3a8a, 0 2px 8px rgba(0, 0, 0, 0.2);
        }

        .btn-danger {
            background: linear-gradient(145deg, #dc2626, #ef4444);
            box-shadow: 0 6px 0 #991b1b, 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .btn-danger:active {
            transform: translateY(4px);
            box-shadow: 0 2px 0 #991b1b, 0 2px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body class="bg-gradient-to-br from-gray-100 to-gray-200 min-h-screen p-6 font-sans">
    <div class="max-w-6xl mx-auto bg-white rounded-2xl shadow-2xl p-6">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-extrabold text-gray-800">📚 Data
                Guru</h1>
            <a href="{{ url('teachers/create') }}" class="btn-3d text-white font-bold py-3 px-5 rounded-lg text-lg">
                ➕ Tambah Data
            </a>
        </div>
        @if (session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4 rounded-lg">
                {{ session('success') }}
            </div>
        @endif
        <div class="overflow-x-auto">
            <table class="w-full border-collapse">
                <thead>
                    <tr class="bg-indigo-600 text-white">
                        <th class="py-3 px-4 text-left">#</th>
                        <th class="py-3 px-4 text-left">NIP</th>
                        <th class="py-3 px-4 text-left">Nama</th>
                        <th class="py-3 px-4 text-left">Email</th>
                        <th class="py-3 px-4 text-left">Bidang Studi</th>
                        <th class="py-3 px-4 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($teachers as $teacher)
                        <tr class="border-b hover:bg-gray-100 transition">
                            <td class="py-3 px-4">{{ $loop->iteration }}</td>
                            <td class="py-3 px-4">{{ $teacher->nip }}</td>
                            <td class="py-3 px-4">{{ $teacher->nama }}</td>
                            <td class="py-3 px-4">{{ $teacher->email }}</td>
                            <td class="py-3 px-4">{{ $teacher->bidang_studi }}</td>
                            <td class="py-3 px-4 flex justify-center gap-2">
                                <a href="{{ url('teachers/' . $teacher->id . '/edit') }}"
                                    class="btn-3d text-white font-bold py-2 px-4 rounded-lg text-sm">✏️
                                    Edit
                                </a>
                                <form action="{{ url('teachers/' . $teacher->id) }}" method="POST"
                                    onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="btn-danger text-white font-bold py-2 px-4 rounded-lg text-sm">🗑️
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-4 text-gray-500">Belum ada data guru.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
