<h1>Pelanggan</h1>

<table>
    <tr>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>No_Telepon</th>
    </tr>
@foreach ($pelanggan as $item)
    <tr>
        <td>{{ $item->nama_pelanggan }}</td>
        <td>{{ $item->jenis_kelamin }}</td>
        <td>{{ $item->no_telepon }}</td>
    </tr>
    

@endforeach
</table>