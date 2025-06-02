@extends('layout.main')
@section('title', 'pelanggan')

@section('content')
<!--begin::Row-->
<div class="row">
    <div class="col-12">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">List pelanggan</h3>
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
        <a href="{{ route('fakultas.create')}}" class="btn btn-primary"> Tambah pelanggan </a>
            <table class="table" >
                <tr>
                    <th> nama_pelanggan </th>
                    <th> jenisKelamin_pelanggan </th>
                    <th> noTelp_pelanggan </th>
                </tr>
                @foreach ($pelanggan as $item)
                    <tr>
                        <td>{{ $item->nama_pelanggan }}</td>
                        <td>{{ $item->jenisKelamin_pelanggan}}</td>
                        <td>{{ $item->noTelp_pelanggan}}</td>
                        <td>
                         <a href="{{ route('pelanggan.show', $item->id) }}" class="btn btn-primary">Show</a>
                            <a href="{{ route('pelanggan.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('pelanggan.destroy', $item->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger show_confirm" data-lte-toggle="tooltip" title="Delete" data-nama_pelanggan="{{$item->nama_pelanggan}}">Delete</button>
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