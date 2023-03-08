@extends('layouts.app')

@section('page-content')
    <form class="card m-5 mx-auto" style="width: 75%;">
        <div class="card-header h6">
            Detail Buku
        </div>
        <div class="card-body">
            <x-input name="judul" label="Judul" :value="$book->judul" disabled />
            <label class="mb-3 my-2" for="sampul">Sampul</label>
            <div>
                <img id="sampul" name="sampul" class="img-fluid mb-3 col-sm-5" src="{{ $book->sampul }}" style="max-width: 12.5em; max-height: 12.5em;">
            </div>
            <x-input name="pengarang" label="Pengarang" :value="$book->pengarang" disabled />
            <x-input name="penerbit" label="Penerbit" :value="$book->penerbit" disabled />
            <a href="{{ route('admin.index') }}" class="btn btn-primary">Kembali</a>
        </div>
    </form>
@endsection
