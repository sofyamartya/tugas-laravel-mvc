@extends('layouts_adminlte.master')

@section('content')
<div class="card card-primary ml-2 mt-2 mr-2">
            <div class="card-header">
              <h3 class="card-title">Edit Question {{ $edited->id }}</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="/pertanyaan/{{ $edited->id }}" method="POST">
              @csrf
              @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <label for="judul">Title</label>
                  <input type="text" class="form-control" id="judul" name="judul" value=" {{ old('judul', $edited->judul) }} " placeholder="Enter a title">
                  @error('judul')
                    <div class="alert alert-danger">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="isi">Pertanyaan</label>
                  <input type="text" class="form-control" id="isi" name="isi" value="{{ old('isi', $edited->isi) }}" placeholder="Write down your question here">
                  @error('isi')
                    <div class="alert alert-danger">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
@endsection
