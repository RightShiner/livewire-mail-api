<div>
    <div class="p-4 my-4 bg-gray-300 shadow-xl rounded-md">

        <table class="table-auto w-full border-collapse border border-green-800">
            <thead>
                <tr>
                    <th class=" border">No</th>
                    <th class=" border">Nama Produk</th>
                    <th class=" border">Harga</th>
                    <th class=" border">Bobot</th>
                    <th class=" border">Status</th>
                    <th class=" border">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $e => $dt)
                    <tr>
                        <td class="border">{{ $e + 1 }}</td>
                        <td class="border">{{ $dt->nama_produk }}</td>
                        <td class="border">{{ $dt->harga }}</td>
                        <td class="border">{{ $dt->bobot }}</td>
                        <td class="border">{{ $dt->status }}</td>
                        <td class="Border"></td>
                    </tr>

                @endforeach

            </tbody>
        </table>
    </div>
</div>
