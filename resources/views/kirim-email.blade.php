@extends('layouts.app')

@section('content')
<div class="row justtify-content-center">
    <h3 class="text-center my-2">Tutorial Queue Laravel</h3>
    <div class="col-md-4 p-4">
        {{--send email--}}
        @if (session('status'))
        <div class="alert alert-primary" role="alert">
            {{session('status')}}
        </div>
        @endif

        <form action="{{route('post-email')}}" method="post">
            @csrf
            <div class="from-group my-3">
                <label for="name">Nama</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Nama">
            </div>
            <div class="from-group my-3">
                <label for="email">Email Tujuan</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email Tujuan">
            </div>
            <div class="from-group my-3">
                <label for="name">Deskripsi</label>
                <textarea name="body" class="form-control" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="from-group">
                <button class="btn btn-primary">Kirim Email</button>
            </div>
    </div>
</div>
@endsection