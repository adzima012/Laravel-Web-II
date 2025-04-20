<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Daftar Barang</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>

<body>

<div class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 lg:justify-top min-h-screen flex-col">
    <div class="grid grid-cols-8 gap-4 mb-4 p-5">
        <div class="col-span-4 mt-2">
            <h1 class="text-blue-600 dark:text-sky-400 text-3xl font-bold">DAFTAR BARANG</h1>
        </div>
    </div>

    <div class="bg-white p-5 rounded shadow-sm">
        @if (session('success'))
            <div class="p-3 rounded bg-green-500 text-green-100 mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-white uppercase bg-gray-500">
                <tr>
                    <th class="px-6 py-3">No</th>
                    <th class="px-6 py-3">Nama</th>
                    <th class="px-6 py-3">Kode</th>
                    <th class="px-6 py-3">Stok</th>
                    <th class="px-6 py-3">Harga</th>

                </tr>
                </thead>
                <tbody>
                @forelse ($barangs as $barang)
                    <tr class="bg-white border-b">
                        <td class="px-6 py-4">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4">{{ $barang->nama }}</td>
                        <td class="px-6 py-4">{{ $barang->kode }}</td>
                        <td class="px-6 py-4">{{ $barang->stok }}</td>
                        <td class="px-6 py-4">{{ $barang->harga }}</td>
                        
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center px-6 py-4">Data kosong</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-3">
            {{ $barangs->links() }}
        </div>
    </div>
</div>

</body>
</html>
