@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-body">
      <h5>{{ $title }}</h5>
      <form class="mt-4" action="" method="POST">
        @method('PUT')
        @csrf
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group mb-3">
              <label for="id_gol" class="form-label">Plat Mobil*</label>
              <select class="form-control @error('id_gol') is-invalid @enderror" name="id_gol" id="id_gol">
                <option value="">-- Pilih --</option>
                @foreach($golongans as $golongan)
                <option value="{{ $golongan->id }}" {{ $pelanggan->id_gol == $golongan->id ? 'selected' : ''}}>{{ $golongan->nama }}</option>
                @endforeach
              </select>
              @error('id_gol')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-group mb-3">
              <label for="nama" class="form-label">Nama*</label>
              <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" value="{{ $pelanggan->nama }}" placeholder="Nama">
              @error('nama')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-group mb-3">
              <label for="alamat" class="form-label">Alamat*</label>
              <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat" placeholder="Alamat">{{ $pelanggan->alamat }}</textarea>
              @error('alamat')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-group mb-3">
              <label for="no_hp" class="form-label">No HP*</label>
              <input type="text" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" id="no_hp" value="{{ $pelanggan->no_hp }}" placeholder="No HP">
              @error('no_hp')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group mb-3">
              <label for="tgl" class="form-label">Tgl Berangkat*</label>
              <input type="text" class="form-control @error('tgl') is-invalid @enderror" name="tgl" id="tgl" value="{{ $pelanggan->tgl }}" placeholder="Tgl Berangkat">
              @error('tgl')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-group mb-3">
              <label for="tujuan" class="form-label">Tujuan*</label>
              <input type="text" class="form-control @error('tujuan') is-invalid @enderror" name="tujuan" id="tujuan" value="{{ $pelanggan->tujuan }}" placeholder="Tujuan">
              @error('tujuan')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-group mb-3">
              <label for="jumlah" class="form-label">Jumlah Tiket*</label>
              <input type="text" class="form-control @error('jumlah') is-invalid @enderror" name="jumlah" id="jumlah" value="{{ $pelanggan->jumlah }}" placeholder="Jumlah">
              @error('jumlah')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-group mb-3">
              <label for="harga" class="form-label">Harga Tiket*</label>
              <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga" id="harga" value="{{ $pelanggan->harga }}" placeholder="Harga">
              @error('harga')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-group mb-3">
              <label for="kursi" class="form-label">Kursi*</label>
              <input type="text" class="form-control @error('kursi') is-invalid @enderror" name="kursi" id="kursi" value="{{ $pelanggan->kursi }}" placeholder="Kursi">
              @error('kursi')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-group mb-3">
              <label for="id_user" class="form-label">User*</label>
              <select class="form-control @error('id_user') is-invalid @enderror" name="id_user" id="id_user">
                <option value="">-- Pilih --</option>
                @foreach($users as $user)
                <option value="{{ $user->id }}" {{ $pelanggan->id_user == $user->id ? 'selected' : ''}}>{{ $user->nama }}</option>
                @endforeach
              </select>
              @error('id_user')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-group mb-3">
              <label for="status" class="form-label">Status*</label>
              <select class="form-control @error('status') is-invalid @enderror" name="status" id="status">
                <option value="Aktif" {{ $pelanggan->status == 'Aktif' ? 'selected' : ''}}>Aktif</option>
                <option value="Tidak Aktif" {{ $pelanggan->status == 'Tidak Aktif' ? 'selected' : ''}}>Tidak Aktif</option>
              </select>
              @error('status')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-group mb-3">
              <button class="btn btn-success float-end" type="submit">Edit</button>
            </div>

          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
