@extends('layouts.app')

@section('title', 'Friends')

@section('content')
<a href="/friends/create" class="card-link btn-primary">Tambah Teman</a>

@foreach ($friends as $friend)

  <div class="card my-3 " style="width: 15rem;">
    <div class="card-body ">
      <a class="text-decoration-none" href="/friends/{{ $friend['id'] }}">
        <h5 class="card-title">{{ $friend['nama'] }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{ $friend['no_tlp'] }}</h6>
        <p class="card-text">{{ $friend['alamat'] }}</p>
      </a>
      <div class="mt-3">
        <a href="/friends/{{ $friend['id'] }}/edit" class="card-link btn-warning">Edit Teman</a>
        <form action="/friends/{{$friend['id']}}" method="POST">
          @csrf
          @method('DELETE')
          <button class="card-link btn-danger">Delete teman</button>
        </form>
      </div>
    </div>
  </div>

    
@endforeach
<div>
  {{ $friends->links() }}
</div>
@endsection