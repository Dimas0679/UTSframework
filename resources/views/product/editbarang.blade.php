@extends('layouts.app')

@section('content')
<div class="container">
<h1>Edit list barang</h1>
    <div class="container">
        <form action="{{ route('barang.update', $barang) }}" method="POST">
            @csrf
            @method('PUT')            
            <div class="form-group">
                <label for="price">nama barang :</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan nama barang">            

                @if (count($errors)>0)
                    <div style="width=auto; color:red; margin-top: 0.25rem;">
                        {{$errors->first('name')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="description">harga barang :</label>
                <input type="number" class="form-control" name="harga" id="harga" placeholder="Masukkan harga barang">            

                @if (count($errors)>0)
                    <div style="width=auto; color:red; margin-top: 0.25rem;">
                        {{$errors->first('harga')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="description">deskripsi barang :</label>
                <input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Masukkan deskripsi barang">            

                @if (count($errors)>0)
                    <div style="width=auto; color:red; margin-top: 0.25rem;">
                        {{$errors->first('deskripsi')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="description">satuan barang :</label>
                <input type="number" class="form-control" name="satuan" id="satuan" placeholder="Masukkan satuan barang">            

                @if (count($errors)>0)
                    <div style="width=auto; color:red; margin-top: 0.25rem;">
                        {{$errors->first('satuan')}}
                    </div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
        </form>
    </div>    
</div>
@endsection
