<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
</head>
<body class="p-10 bg-gray-50">
    <div class="mb-6 flex justify-between items-center">
        <h1 class="text-2xl font-bold">DAFTAR BARANG</h1>
        <a href="{{ route('barang.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded shadow hover:bg-blue-700 transition">TAMBAHKAN BARANG</a>
    </div>

    <div class="overflow-x-auto">
        <table id="barang-table" class="display w-full">
            <thead class="bg-gray-100">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kode</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($barangs as $index => $barang)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $barang->nama }}</td>
                        <td>{{ $barang->kode }}</td>
                        <td>{{ $barang->stok }}</td>
                        <td>{{ number_format($barang->harga, 2, ',', '.') }}</td>
                        <td class="space-x-2">
                            <a href="{{ route('barang.edit', $barang->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded text-sm">Edit</a>
                            <form action="{{ route('barang.destroy', $barang->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus barang ini?');" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded text-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#barang-table').DataTable();
        });
    </script>
</body>
</html>
