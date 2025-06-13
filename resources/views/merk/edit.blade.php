@extends('layout.main')
@section('title', 'merk')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card card-primary card-outline mb-4">
      <div class="card-header">
        <div class="card-title">Edit Kendaraan</div>
      </div>

      <form action="{{ route('merk.update'), $merk ->id  }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-body">
          <div class="mb-3">
            <label for="nama_merk" class="form-label">Nama Merk</label>
            <input type="text" class="form-control" name="nama_merk" value="{{ old('nama_merk') ? old('nama_merk') : $merk->nama_merk }}">
            @error('nama_merk') <div class="text-danger">{{ $message }}</div> @enderror
          </div>

          <div class="mb-3">
            <label for="img_merk" class="form-label">Foto Merk</label>
            <input type="file" class="form-control" name="img_merk" value="{{ old('img_merk') >
            @error('img_merk') <div class="text-danger">{{ $message }}</div> @enderror
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
