<h1>Merk</h1>

<table>
    <tr>
        <th>Nama</th>
        <th>Foto</th>
    </tr>
@foreach ($merk as $item)
    <tr>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->foto }}</td>
        <td><img src="images/{{$item->foto }}" width="80px" /></td>
    </tr>
    

@endforeach
</table>