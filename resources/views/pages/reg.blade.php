<!DOCTYPE html>
<html lang="en" style="height: 100%;">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body style="height: 100%;">
    <div class="w-100 d-flex" style="height: 100%;">
        <div class="w-50 text-muted" style="background-image: url('bg-reg.png'); height: 100%; padding: 0 140px; padding-top: 35%;">
            <div class="h1 text-light">
                Temukan Berbagai Kumpulan Buku Yang Tersedia Disini.
            </div>
            Cari dan pilih buku yang anda inginkan untuk di baca.
        </div>
        <div class="w-50 align-middle" style="padding: 0 140px; margin-top: 15%;">
            <h5 class="card-title text-center">Create your account</h5>
            <x-input name="email" label="Email" :value="old('email')" />
            <x-input name="password" type="password" label="Password" :value="old('password')" />
            <x-input name="confirmasi password" type="password" label="Confirmasi password" :value="old('confirmasi password')" />
            <button type="submit" style="width: 100%; background: #364FF6;" class="btn rounded-pill text-light my-4">Submit</button>
        </div>
    </div>
</body>
</html>