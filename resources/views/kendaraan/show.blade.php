@extends('layout.main')
@section('title', 'kendaraan')
@section('content')
<div class="container-fluid">
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
            <table class="table">
                <tr>               
                <tr>
                    <td>
                        <td colspan="2"> 
                                              
                            <img src="{{ asset('images/'.$kendaraan->img_kendaraan) }}" class="img-fluid">
                    </td>
                    </tr>
                    </tr>
                    <tr>
                    <th>Id Kendaraan</th>
                    <td>{{ $kendaraan->id_kendaraan }}</td>
                </tr>
                <tr>
                    <th>Id Model</th>
                    <td>{{ $kendaraan->varian->id_model }}</td>
                </tr>
                <tr>
                    <th>Tipe Kendaraan</th>
                    <td>{{ $kendaraan->tipe_kendaraan}}</td>
                </tr>
                <tr>
                    <th>Tahun Kendaraan</th>
                    <td>{{ $kendaraan->tahun_kendaraan }}</td>
                </tr>
                <tr>
                    <th>Transmisi Kendaraan</th>
                    <td>{{ $kendaraan->transmisi_kendaraan }}</td>
                </tr>
                <tr>
                    <th>Plat Kendaraan</th>
                    <td>{{ $kendaraan->plat_kendaraan }}</td>
                </tr>
                <tr>
                    <th>Harga Kendaraan</th>
                    <td>{{ $kendaraan->harga_kendaraan}}</td>
                </tr>
                <tr>
                    <th>Kapasitas Mesin OP Kendaraan</th>
                    <td>{{ $kendaraan->kapasitasMesinOP_kendaraan }}</td>
                </tr>
                <tr>
                    <th>Kilometer OP Kendaraan</th>
                    <td>{{ $kendaraan->kilometerOP_kendaraan }}</td>
                </tr>
                <tr>
                    <th>Bahan Bakar OP Kendaraan</th>
                    <td>{{ $kendaraan->bahanBakarOP_kendaraan }}</td>
                </tr>
                <tr>
                    <th>Warna Fisik OP Kendaraan</th>
                    <td>{{ $kendaraan->warnaFisikOP_kendaraan }}</td>
                </tr>
                <tr>
                    <th>Foto Kendaraan</th>
                    <td>{{ $kendaraan->img_kendaraan }}</td>
                </tr>
                
                </table>
          </div>
        </div>
    </div>
</div>
@endsection