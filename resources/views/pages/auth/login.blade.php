@extends('layouts.auth')

@section('page-content')
    <div class="w-100 d-flex" style="height: 100%;">
        <div class="w-50 text-muted" style="background: #010828; height: 100%; padding: 0 140px; padding-top: 20%;">
            <div class="h1 text-light">
                Temukan Berbagai Kumpulan Buku Yang Tersedia Disini.
            </div>
            Cari dan pilih buku yang anda inginkan untuk di baca.
        </div>
        <div class="w-50 align-middle" style="padding: 0 140px; margin-top: 15%;">
            <h5 class="card-title text-center">Login first your account</h5>
            <form action="{{ route('login.store') }}" method="post">
                @csrf

                <x-input name="email" label="Email" :value="old('email')" required />
                <x-input name="password" type="password" label="Password" :value="old('password')" required />
                <button type="submit" style="width: 100%; background: #364FF6;" class="btn rounded-pill text-light my-4">Submit</button>
            </form>
            <p class="mt-5 text-center" >Belum punya akun?<a href="{{ route('register.index') }}"> Register </a></p>
        </div>
    </div>
@endsection
