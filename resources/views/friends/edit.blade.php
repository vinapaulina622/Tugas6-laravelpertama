@extends('layouts.app')

@section('title', 'Friends')

@section('content')


<form action="/friends/{{ $friends['id'] }}" method="POST">
    @csrf
    @method('PUT')
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
  <input type="text" class="form-control" id="exampleInputEmail1" name="nama" aria-describedby="emailHelp" value="{{ old('nama') ? old('nama') : $friends['nama'] }}">
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">No Telpon</label>
    <input type="number" class="form-control" name="no_tlp" id="exampleInputPassword1" value={{ old('no_tlp')? old('no_tlp') : $friends['no_tlp'] }}>
    @error('no_tlp')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="alamat">Alamat</label>
    <input type="text" class="form-control" name="alamat" id="alamat" value={{ old('alamat')? old('alamat') : $friends['alamat'] }}>
    @error('alamat')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

    
@endsection