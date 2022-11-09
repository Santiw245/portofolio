@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                {!! \Session::get('success') !!}
            </div>
        @endif
            <h1 class="display-4">Project</h1>
            @auth
            <a class="btn btn-primary" href="/project/create" role="button">Add</a>
            @endauth
        </div>
    </div>
    <br>
    <div class="row">
        @if(count($project)>0)
            @foreach ($project as $pro)
                <div class="col-sm-6">
                    <div class="card">
                    <img src="{{asset('storage/posts_image/'.$pro->picture)}}" height="200" width="547">
                            <div class="card-body">
                                <p class="card-title">{{$pro->judul}}</p>
                                <p class="card-text">{{$pro->deskripsi}}</p>
                                @auth
                                <a class="btn btn-primary" href="/project/{{$pro->id}}" role="button">Show</a>
                                @endauth
                            </div>
                    </div>
                    <br>
                </div>
            @endforeach
        @else
            <h3>Tidak ada data</h3>
        @endif
        Halaman : {{ $project->currentPage() }} <br />
        Jumlah Data : {{ $project->total() }} <br />
        Data Per Halaman : {{ $project->perPage() }} <br />
            <div class="d-flex">
                {{ $project->links() }}
            </div>
    </div>
</div>     
@endsection
