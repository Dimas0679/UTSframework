@extends('layouts.app')

@section('content')
<div class="container">
<h1>Daftar barang</h1>
        <div class="container">
            <div class="row">
                <div class="col">
                    <a href="{{route('barang.create')}}" class="btn btn-info">menambahkan barang</a>
                </div>
            </div>
        </div>
        <div class="container">
            <table class="table table-striped mt-3">
                <tr>
                    <th scope="col">kode barang</th>
                    <th scope="col">nama barang</th>
                    <th scope="col">harga barang</th>
                    <th scope="col">deskripsi barang</th>
                    <th scope="col">satuan barang</th>
                    <th scope="col">perintah</th>
                </tr>
                @foreach ($product as $barang)
                <tr>
                    <td scope="row">{{ $barang->kode_barang }}</td>
                    <td>{{ $barang->nama_barang }}</td>
                    <td>{{ $barang->harga_barang }}</td>
                    <td>{{ $barang->deskripsi_barang }}</td>
                    <td>{{ $barang->satuan->nama_satuan }}</td>
                    <td>
                        <a href="{{ route('barang.edit', $barang) }}">Edit</a>
                        <form action="{{ route('barang.destroy', $barang) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
</div>
@endsection
