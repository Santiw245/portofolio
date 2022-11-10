@extends('layouts.app')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1>{{$project->judul}}</h1>
            <small>Tanggal : {{$project->created_at}}</small>
            <p>{{$project->deskripsi}}</p>
            <img src="{{asset('storage/posts_image/'.$project->picture)}}" height="500" width="500">
            <br>
            <br>
            <a href="/project/{{$project->id}}/edit" class="btn btn-primary">Edit</a>

            <form action="{{ route('project.destroy', $project->id) }}" method="POST">
            @method('DELETE')
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $project->id }}"> <br />
            <button type="submit" class="btn btn-danger">Delete</button>
            <a href="/project/hapus/{{$project->id}}" onclick ="return confirm('Yakin ingin menghapus?');" class="btn btn-danger">Delete 2</a>
            </form>
        </div>
    </div>
@endsection