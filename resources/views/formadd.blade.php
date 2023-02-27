<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tambah Buku</title>
</head>
<body>
    <form class="card m-5 mx-auto" style="width: 75%;">
        <div class="card-header h6">
            Formulir Tambah Buku
        </div>
        <div class="card-body">
            @component('component.input')
                @slot('name') Judul @endslot
            @endcomponent
            <div class="mb-3" >
                <label class="my-2" for="sampul">Upload Sampul</label>
                <input type="file" name="sampul"  class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
            </div>
            @component('component.input')
                @slot('name') Pengarang @endslot
            @endcomponent
            @component('component.input')
                @slot('name') Penerbit @endslot
            @endcomponent
            <button type="submit" class="btn btn-success">Tambahkan Data</button>
        </div>
    </form>
</body>
</html>