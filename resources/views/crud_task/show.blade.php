@extends('layouts_adminlte.master')

@section('content')
    <div class="card">
      <div class="card-header">
        <h3>{{ $detail->judul }}</h3>
      </div>

      <div class="card-body">
        <p>{{ $detail->isi }}</p>
      </div>
    </div>

@endsection
