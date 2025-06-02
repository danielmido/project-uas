@extends('layout.main')
@section('title', 'kendaraan')

@section('content')
<!--begin::Row-->
<div class="row">
    <div class="col-12">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">List Kendaraan</h3>
          <div class="card-tools">
            <button
              type="button"
              class="btn btn-tool"
              data-lte-toggle="card-collapse"
              title="Collapse"
            >
              <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
              <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
            </button>
            <button
              type="button"
              class="btn btn-tool"
              data-lte-toggle="card-remove"
              title="Remove"
            >
              <i class="bi bi-x-lg"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <a href="{{ route('fakultas.create')}}" class="btn btn-primary"> Tambah Kendaraan </a>
            <table class="table" >
                <tr>
                    <th> Id Kendaraan </th>
                    <th> Nama Varian </th>
                    <th> Tipe Kendaraan </th>
                    <th> Tahun Kendaraan </th>
                    <th> Transmisi Kendaraan </th>
                    <th> Plat Kendaraan </th>
                    <th> Harga Kendaraan </th>
                    <th> Kapasitas Mesin OP Kendaraan </th>
                    <th> Kilometer OP Kendaraan </th>
                    <th> Bahan Bakar OP Kendaraan </th>
                    <th> Warna FisikOP Kendaraan </th>
                    <th> Foto Kendaraan </th>
                </tr>
                @foreach ($kendaraan as $item)
                    <tr>
                        <td>{{ $item->id_kendaraan }}</td>
                        <td>{{ $item->varian->nama_varian }}</td>
                        <td>{{ $item->tipe_kendaraan }}</td>
                        <td>{{ $item->tahun_kendaraan }}</td>
                        <td>{{ $item->transmisi_kendaraan }}</td>
                        <td>{{ $item->plat_kendaraan }}</td>
                        <td>{{ $item->harga_kendaraan }}</td>
                        <td>{{ $item->kapasitasMesinOP_kendaraan }}</td>
                        <td>{{ $item->kilometerOP_kendaraan }}</td>
                        <td>{{ $item->bahanBakarOP_kendaraan }}</td>
                        <td>{{ $item->warnaFisikOP_kendaraan }}</td>
                        <td>{{ $item->img_kendaraan }}</td>
                        <td>
                         <a href="{{ route('kendaraan.show', $item->id) }}" class="btn btn-primary">Show</a>
                            <a href="{{ route('kendaraan.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('kendaraan.destroy', $item->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger show_confirm" data-lte-toggle="tooltip" title="Delete" data-id_kendaraan="{{$item->id_kendaraan}}">Delete</button>
                                </form>
                                </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <!-- /.card-body -->
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
    </div>
  </div>
  <!--end::Row-->

@endsection