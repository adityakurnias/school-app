<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Guru Baru</title>

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
    </style>
</head>

<body class="bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center min-h-screen p-4 font-sans">
    <div class="container mx-auto max-w-lg bg-white rounded-2xl shadow-2xl p-8">
        <h1 class="text-3xl font-extrabold text-center text-gray-800 mb-6">Tambah Guru Baru</h1>
        <form action="{{ url('teachers') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="nip" class="block text-gray-700 font-semibold mb-1">NIP</label>
                <input type="text" name="nip" id="nip"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>
            <div>
                <label for="nama" class="block text-gray-700 font-semiboldmb-1">Nama</label>
                <input type="text" name="nama" id="nama"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring- focus:ring-indigo-500">
            </div>
            <div>
                <label for="email" class="block text-gray-700 font-semibold mb-1">Email</label>
                <input type="email" name="email" id="email"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>
            <div>
                <label for="bidang_studi" class="block text-gray-700 font-semibold mb-1">Bidang Studi</label>
                <input type="text" name="bidang_studi" id="bidang_studi"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>
            <button type="submit" class="btn-3d text-white font-bold py-3 px-6 rounded-lg w-full text-lg">
                💾 Simpan Data
            </button>
        </form>
    </div>
</body>

</html>
