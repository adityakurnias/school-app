<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-green-50 to-green-100 min-h-screen flex items-center justify-center p-6">
    <div class="w-full max-w-2xl bg-white rounded-2xl shadow-lg overflow-hidden">
        <!-- Header -->
        <div class="bg-green-500 px-6 py-4">
            <h1 class="text-2xl font-bold text-white text-center">Tambah
                Data Siswa</h1>
        </div>
        <!-- Form -->
        <form action="{{ url('students') }}" method="POST" class="p-6 space-y-5">
            @csrf
            <!-- NIS -->
            <div>
                <label for="nis" class="block text-sm font-medium text-gray-700 mb-1">NIS</label>
                <input type="text" name="nis" id="nis"
                    class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-green-400 focus:border-green-400">
            </div>
            <!-- Nama -->
            <div>
                <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama</label>
                <input type="text" name="nama" id="nama"
                    class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-green-400 focus:border-green-400">
            </div>
            <!-- Tanggal Lahir -->
            <div>
                <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700 mb-1">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                    class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-green-400 focus:border-green-400">
            </div>
            <!-- Gender -->
            <div>
                <label for="gender" class="block text-sm font-medium text-gray-700 mb-1">Jenis Kelamin</label>
                <select name="gender" id="gender"
                    class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-green-400 focus:border-green-400">
                    <option value="">-- Pilih --</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <!-- Alamat -->
            <div>
                <label for="alamat" class="block text-sm font-medium text-gray-700 mb-1">Alamat</label>
                <textarea name="alamat" id="alamat" rows="3"
                    class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-green-400 focus:border-green-400"></textarea>
            </div>
            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" name="email" id="email"
                    class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-green-400 focus:border-green-400">
            </div>
            <!-- Button -->
            <div>
                <button type="submit"
                    class="w-full bg-green-500 hover:bg-green-600 text-white font-semibold py-3 rounded-lg shadow-md transition transform hover:scale-105">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</body>

</html>
