@extends('layouts.app')

@section('content')
<div class="container">
    <h1>ini adalah halaman Home</h1>
        <br>
        <div class="row">
            <div class="col">
                <a href="{{route('barang.index')}}" class="btn btn-primary">ke daftar barang</a>
            </div>
            <div class="col">
                <a href="profile" class="btn btn-dark">ke halaman profile</a>
            </div>
        </div>
</div>
@endsection
