@extends('layouts.app')
@section('content')
        <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Education</h1>
            @if(count($education)>0)
                @foreach ($education as $education)
                    <div class="well">
                        <ul>
                            <li><b>{{$education->jenjang}}</b></li>
                            <p>{{$education->instansi}}</p>
                            <p>{{$education->tahun}}</p>
                        </ul>
                    </div>
                @endforeach
            @else
            <h3>Tidak ada data</h3>
            @endif
        </div>
        </div>
@endsection