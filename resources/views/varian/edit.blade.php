@extends('layout.main')
@section('title', 'varian')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card card-primary card-outline mb-4">
      <div class="card-header">
        <div class="card-title">Edit Varian</div>
      </div>

      <form action="{{ route('varian.store') }}" method="POST">
        @csrf

        <div class="card-body">
          <div class="mb-3">
            <label for="nama_varian" class="form-label">Nama Varian</label>
            <input type="text" class="form-control" name="nama_varian" value="{{ old('nama_varian') ?  old('nama_varian') : $varian->nama_varian }}">
            @error('nama_varian') <div class="text-danger">{{ $message }}</div> @enderror
          </div>
          
          <div class="mb-3">
            <label for="foto" class="form-label">Foto Varian</label>
            <input type="file" class="form-control" name="img_varian"  value="{{ old('img_varian') }}">
            @error('img_varian') <div class="text-danger">{{ $message }}</div> @enderror
          </div>

          <div class="mb-3">
            <label for="nama_varian" class="form-label">Merk</label>
            <input type="text" class="form-control" name="nama_merk" value="{{ old('nama_merk') ? old('nama_merk') : $varian->merk->nama_merk }}">
            @error('nama_merk') <div class="text-danger">{{ $message }}</div> @enderror
        </div>
        </div>
        
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>

      </form>
    </div>
  </div>
</div>
@endsection
