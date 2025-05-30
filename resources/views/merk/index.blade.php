@extends('layout.main')
@section('title', 'merk')

@section('content')
<!--begin::Row-->
<div class="row">
    <div class="col-12">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">List Merk</h3>
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
        <a href="{{ route('fakultas.create')}}" class="btn btn-primary"> Tambah Merk </a>
            <table class="table" >
                <tr>
                    <th> nama_merk </th>
                    <th> img_merk </th>
                </tr>
                @foreach ($merk as $item)
                    <tr>
                        <td>{{ $item->nama_merk }}</td>
                        <td>{{ $item->img_merk }}</td>
                        <td>
                         <a href="{{ route('merk.show', $item->id) }}" class="btn btn-primary">Show</a>
                            <a href="{{ route('merk.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('merk.destroy', $item->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger show_confirm" data-lte-toggle="tooltip" title="Delete" data-nama_merk="{{$item->nama_merk}}">Delete</button>
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