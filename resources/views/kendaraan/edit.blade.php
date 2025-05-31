@extends('layout.main')
@section('title', 'Kendaraan')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card card-primary card-outline mb-4">
      <div class="card-header">
        <div class="card-title">Edit Kendaraan</div>
      </div>

      <form action="{{ route('kendaraan.update', $kendaraan ->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
                      
        <div class="card-body">
          <div class="mb-3">
            <label for="id_kendaraan" class="form-label">ID Kendaraan</label>
            <input type="text" class="form-control" name="id_kendaraan" value="{{ old('id_kendaraan') ? old('id_kendaraan') : $kendaraan->id_kendaraan }}" readonly>
            @error('id_kendaraan') <div class="text-danger">{{ $message }}</div> @enderror
          </div>

          <div class="mb-3">
            <label for="nama_varian" class="form-label">Nama Varian</label>
            <input type="text" class="form-control" name="nama_varian" value="{{ old('nama_varian') ? old('nama_varian') : $kendaraan->nama_varian }}">
            @error('nama_varian') <div class="text-danger">{{ $message }}</div> @enderror
          </div>

          <div class="mb-3">
            <label for="tipe_kendaraan" class="form-label">Tipe Kendaraan</label>
            <input type="text" class="form-control" name="tipe_kendaraan" value="{{ old('tipe_kendaraan') ? old('tipe_kendaraan') : $kendaraan->tipe_kendaraan }}">
            @error('tipe_kendaraan') <div class="text-danger">{{ $message }}</div> @enderror
          </div>

          <div class="mb-3">
            <label for="tahun_kendaraan" class="form-label">Tahun Kendaraan</label>
            <input type="number" class="form-control" name="tahun_kendaraan" value="{{ old('tahun_kendaraan') ? old('tahun_kendaraan') : $kendaraan->tahun_kendaraan }}">
            @error('tahun_kendaraan') <div class="text-danger">{{ $message }}</div> @enderror
          </div>

          <div class="mb-3">
            <label for="transmisi" class="form-label">Transmisi Kendaraan</label>
            <input type="text" class="form-control" name="transmisi" value="{{ old('transmisi') ? old('transmisi') : $kendaraan->transmisi }}">
            @error('transmisi') <div class="text-danger">{{ $message }}</div> @enderror
          </div>

          <div class="mb-3">
            <label for="plat" class="form-label">Plat Kendaraan</label>
            <input type="text" class="form-control" name="plat" value="{{ old('plat') ? old('plat') : $kendaraan->plat }}">
            @error('plat') <div class="text-danger">{{ $message }}</div> @enderror
          </div>

          <div class="mb-3">
            <label for="harga" class="form-label">Harga Kendaraan</label>
            <input type="number" class="form-control" name="harga" value="{{ old('harga') ? old('harga') : $kendaraan->harga }}">
            @error('harga') <div class="text-danger">{{ $message }}</div> @enderror
          </div>

          <div class="mb-3">
            <label for="kapasitas_mesin" class="form-label">Kapasitas Mesin (cc)</label>
            <input type="number" class="form-control" name="kapasitas_mesin" value="{{ old('kapasitas_mesin') ? old('kapasitas_mesin') : $kendaraan->kapasitas_mesin }}">
            @error('kapasitas_mesin') <div class="text-danger">{{ $message }}</div> @enderror
          </div>

          <div class="mb-3">
            <label for="kilometer" class="form-label">Kilometer Kendaraan</label>
            <input type="number" class="form-control" name="kilometer" value="{{ old('kilometer') ? old('kilometer') : $kendaraan->kilometer }}">
            @error('kilometer') <div class="text-danger">{{ $message }}</div> @enderror
          </div>

          <div class="mb-3">
            <label for="bahan_bakar" class="form-label">Bahan Bakar</label>
            <input type="text" class="form-control" name="bahan_bakar" value="{{ old('bahan_bakar') ? old('bahan_bakar') : $kendaraan->bahan_bakar }}">
            @error('bahan_bakar') <div class="text-danger">{{ $message }}</div> @enderror
          </div>

          <div class="mb-3">
            <label for="warna_fisik" class="form-label">Warna Fisik</label>
            <input type="text" class="form-control" name="warna_fisik" value="{{ old('warna_fisik') ? old('warna_fisik') : $kendaraan->warna_fisik }}">
            @error('warna_fisik') <div class="text-danger">{{ $message }}</div> @enderror
          </div>

          <div class="mb-3">
            <label for="foto" class="form-label">Foto Kendaraan</label>
            <input type="file" class="form-control" name="foto" value="{{ old('foto') }}">
            @error('foto') <div class="text-danger">{{ $message }}</div> @enderror
          </div>
        </div>

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>

      </form>
    </div>
  </div>
</div>
@endsection
