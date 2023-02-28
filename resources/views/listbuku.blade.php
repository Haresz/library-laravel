<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Daftar Buku</title>
    </head>
    <body>
        <div>
            <p class="h3 text-center py-5 bg-light">Daftar Buku</p>
            <div class="m-5">
                <div class="d-flex justify-content-between">
                    <a href="/add" class="btn btn-primary ">Tambah Buku</a>
                        <div class="input-group w-25 ">
                            <input type="text" class="form-control" placeholder="Cari judul buku" aria-label="Cari judul buku" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-primary" type="button">Cari !</button>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-4 my-4" >
                        @foreach ($books as $book)
                            <div class="card col m-2" style="width: 18rem;">
                                <img src="sampul.jpg" class="card-img-top" alt="sampul-buku">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $book->books_name }}</h5>
                                    <div class="d-flex">
                                        <a href="/edit" class="btn btn-primary ">Edit</a>
                                        <a href="#" class="btn btn-danger mx-4">Hapus</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{ $books->links() }}
                </div>
            </div>
        </div>
    </body>
</html>