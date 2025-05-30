@extends('layout.main')
@section('title', 'varian')

@section('content')
<!--begin::Row-->
<div class="row">
    <div class="col-12">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">List varian</h3>
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
        <a href="{{ route('fakultas.create')}}" class="btn btn-primary"> Tambah varian </a>
            <table class="table" >
                <tr>
                    <th> nama_varian </th>
                    <th> img_varian </th>
                </tr>
                @foreach ($varian as $item)
                    <tr>
                        <td>{{ $item->nama_varian }}</td>
                        <td>{{ $item->img_varian}}</td>
                        <td>{{ $item->merk->nama_merk}}</td>
                        <td>
                         <a href="{{ route('varian.show', $item->id) }}" class="btn btn-primary">Show</a>
                            <a href="{{ route('varian.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('varian.destroy', $item->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger show_confirm" data-lte-toggle="tooltip" title="Delete" data-nama_varian="{{$item->nama_varian}}">Delete</button>
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