@extends('layout.main')
@section('title', 'pelanggan')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card card-primary card-outline mb-4">
      <div class="card-header">
        <div class="card-title">Edit Info Pelanggan</div>
      </div>

      <form action="{{ route('pelanggan.store') }}" method="POST">
        @csrf

        <div class="card-body">
          <div class="mb-3">
            <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
            <input type="text" class="form-control" name="nama_pelanggan" value="{{ old('nama_pelanggan') ? old('nama_pelanggan') : $pelanggan->nama_pelanggan }}">
            @error('nama_pelanggan') <div class="text-danger">{{ $message }}</div> @enderror
          </div>

         <div class="mb-3">
            <label for="jk" class="form-label">Jenis Kelamin Pelanggan</label>
            <input type="radio" name="jk" value="L" {{ old('jk') == 'L' ? 'checked' : '' }}> Laki-laki
            <input type="radio" name="jk" value="P" {{ old('jk') == 'P' ? 'checked' : '' }}> Perempuan
            @error('jk')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="noTelp_pelanggan" class="form-label">No Telp Pelanggan</label>
            <input type="text" class="form-control" name="noTelp_pelanggan" value="{{ old('noTelp_pelanggan') ? old('noTelp_pelanggan') : $pelanggan->noTelp_pelanggan }}">
            @error('noTelp_pelanggan') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>

      </form>
    </div>
  </div>
</div>
@endsection
