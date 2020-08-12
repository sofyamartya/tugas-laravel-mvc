@extends('layouts_adminlte.master')

@section('content')
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Questions List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                @if(session('success'))
                  <div class="alert alert-success">
                    {{ session('success') }}
                  </div>
                @endif

                <div class="col text-center">
                  <a class="btn btn-primary mb-3" href="/pertanyaan/create">New Question</a>
                </div>

                  <thead>
                    <tr>
                      <th style="width: 10px">ID</th>
                      <th style="width: 200px">Title</th>
                      <th>Questions</th>
                      <th style="width: 40px">Detail</th>
                      <th style="width: 40px">Edit</th>
                      <th style="width: 40px">Delete</th>
                    </tr>
                  </thead>

                  <tbody>
                  @forelse($posts as $key => $post)
                    <tr>
                      <td>{{ $key + 1}}</td>
                      <td>{{ $post->judul }}</td>
                      <td>{{ $post->isi}}</td>
                      <td>
                        <a href="/pertanyaan/{{$post->id}}" class="btn btn-info btn-sm">Show</a>
                      </td>
                      <td>
                        <a href="/pertanyaan/{{$post->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                      </td>
                      <td>
                        <form action="/pertanyaan/{{$post->id}}" method="post">
                          @csrf
                          @method('DELETE')
                          <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                        </form>
                      </td>
                    </tr>
                  @empty
                    <tr>
                      <td colspan="4" align="center">There is no post</td>
                    </tr>
                  @endforelse
                  </tbody>

                </table>

              </div>
            </div>
@endsection
