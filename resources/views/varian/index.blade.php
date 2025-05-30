<h1>Variasi Mobil</h1>

<table>
    <tr>
        <th>Variasi Mobil</th>
        <th>Foto</th>
    </tr>
@foreach ($varian as $item)
    <tr>
        <td>{{ $item->nama_tipe }}</td>
        <td>{{ $item->img_tipe }}</td>
        <td><img src="images/{{ $item->img_tipe }}" width="80px" /></td>
        <td>{{ $item->merk->nama_merk }}</td>

    </tr>
    

@endforeach
</table>