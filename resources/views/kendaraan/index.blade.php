<h1>Detail Kendaraan</h1>

<table class="table table-bordered table-striped">
    <tr>
        <th>Tipe Kendaraan</th>
        <th>Tahun Kendaraan</th>
        <th>Transmisi Kendaraan</th>
        <th>Plat Kendaraan</th>
        <th>Harga Kendaraan</th>
        <th>Varian</th>
        <th>Foto</th>
    </tr>
    @foreach ($kendaraan as $item)
        <tr>
            <td>{{ $item->tipe_kendaraan }}</td>
            <td>{{ $item->tahun_kendaraan }}</td>
            <td>{{ $item->transmisi_kendaraan }}</td>
            <td>{{ $item->plat_kendaraan }}</td>
            <td>Rp {{ number_format($item->harga_kendaraan, 0, ',', '.') }}</td>
            <td>{{ $item->varian->nama_varian ?? '-' }}</td>
            <td><img src="images/{{ $item->foto }}" width="80px" /></td>
        </tr>
    @endforeach
</table>
