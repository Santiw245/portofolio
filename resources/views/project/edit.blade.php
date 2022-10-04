@extends('layouts.app')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1>Edit Blog Post</h1>
            <form action="{{ route('project.update', $project->id) }}" method="POST">
            @method('PUT')
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" aria-describedby="emailHelp" name="judul" value="{{$project->judul}}">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" rows="5" name="deskripsi">{{$project->deskripsi}}</textarea>
                </div>
                <input type="hidden" name="id" value="{{ $project->id }}"><br/>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection