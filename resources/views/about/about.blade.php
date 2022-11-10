@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">About</h1>
        </div>
    </div>
    <br>
        <div class="row">
            @if(count($about_uses)>0)
                @foreach ($about_uses as $about)
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title">{{$about->judul}}</p>
                                <p class="card-text">{{$about->deskripsi}}</p>
                            </div>
                        </div>
                        <br>
                    </div>
                @endforeach
            @else
            <h3>Tidak ada data</h3>
            @endif
        </div>  
    </div>     
@endsection