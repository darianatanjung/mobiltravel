@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-body">
    <style>
  body{
    background-color:#00CCFF;
  }
</style>
      <h5>{{ $title }}</h5>
      <div class="col-sm-6">
        <form class="row g-3 mt-2" action="" method="POST">
          @csrf

          <div class="form-group">
            <label for="kode" class="form-label">Plat Mobil*</label>
            <input type="text" class="form-control @error('kode') is-invalid @enderror" name="kode" id="kode" placeholder="Kode">
            @error('kode')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="nama" class="form-label">Nama Supir*</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" placeholder="Nama">
            @error('nama')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="merek" class="form-label">Mobil*</label>
            <input type="text" class="form-control @error('merek') is-invalid @enderror" name="merek" id="merek" placeholder="Mobil">
            @error('merek')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="warna" class="form-label">Warna Mobil*</label>
            <input type="text" class="form-control @error('warna') is-invalid @enderror" name="warna" id="warna" placeholder="Warna">
            @error('warna')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="form-group">
            <button class="btn btn-success float-end" type="submit">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
