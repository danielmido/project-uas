@extends('layout.main')
@section('title', 'merk')
@section('content')
<div class="container-fluid">
    <!--begin::Row-->
    <div class="row">
      <div class="col-12">
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">List Merk Kendaraan</h3>
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
            <table class="table">
                <tr>               
                <tr>
                    <td>
                        <td colspan="2">                
                            <img src="{{ asset('images/'.$merk->img_merk) }}" class="img-fluid">
                    </td>
                    </tr>
                    </tr>
                <tr>
                    <th>Nama merk</th>
                    <td>{{ $merk->nama_merk }}</td>
                </tr>
                    <th>Foto merk</th>
                    <td>{{ $merk->img_merk }}</td>
                </tr>
                
                </table>
          </div>
        </div>
    </div>
</div>
@endsection