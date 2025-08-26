<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    
    <link rel="stylesheet" href="{{ asset('/style/app.css') }}">
</head>

<body class="bg-gradient-to-br from-gray-100 to-gray-200 min-h-screen py-10 font-sans">
    <div class="max-w-5xl mx-auto bg-white rounded-2xl shadow-xl p-8">
        <!-- Judul -->
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-8 tracking-wide">
            📚 Daftar Siswa
        </h1>
        <!-- Tombol Tambah -->
        <div class="flex justify-end mb-6">
            <a href="{{ url('students/create') }}"
                class="bg-gradient-to-r from-blue-500 to-blue-600 text-white px-5 py-2 rounded-lg font-semibold shadow-md hover:shadow-lg transition-all duration-300">
                + Tambah Siswa Baru
            </a>
        </div>
        <!-- Notifikasi Sukses -->
        @if (session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-lg mb-6">
                <p class="font-medium">{{ session('success') }}</p>
            </div>
        @endif
        <!-- Tabel Data -->
        <div class="overflow-x-auto rounded-lg shadow-md">
            <table class="min-w-full bg-white">
                <thead>
                    <tr
                        class="bg-gradient-to-r from-gray-200 to-gray-300 text-gray-700 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">NIS</th>
                        <th class="py-3 px-6 text-left">Nama</th>
                        <th class="py-3 px-6 text-left">Email</th>
                        <th class="py-3 px-6 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700 text-sm">
                    @forelse($students as $student)
                        <tr class="border-b border-gray-200 hover:bg-gray-50 transition duration-200">
                            <td class="py-3 px-6 whitespace-nowrap">{{ $student->nis }}</td>
                            <td class="py-3 px-6">{{ $student->nama }}</td>
                            <td class="py-3 px-6">{{ $student->email }}</td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex justify-center space-x-2">
                                    <a href="{{ url('students/' . $student->id . '/edit') }}"
                                        class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 shadow-md hover:shadow-lg transition-all duration-200">
                                        Edit
                                    </a>
                                    <form action="{{ url('students/' . $student->id) }}" method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 shadow-md hover:shadow-lg transition-all duration-200">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center py-6 text-gray-500">
                                Tidak ada data siswa.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
