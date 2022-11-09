@extends('layouts.app')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1>Edit Blog Post</h1>
            <form action="{{ route('project.update', $project->id) }}" method="POST" enctype="multipart/form-data">
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
                <div class="form-group">
                    <label for="input-file">File Input</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="picture">
                            <label class="custom-file-label" for="input-file">Choose File</label>
                        </div>
                    </div>
                <input type="hidden" name="id" value="{{ $project->id }}"><br/>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection