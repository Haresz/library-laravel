<div class="card my-2 w-25">
    <div class="card-img-top h-100 w-100" style="display: flex; justify-content: center; align-items: center; background-color: gray;">
        <img src="{{ $image }}" class="w-100 align-middle" alt="sampul-buku">
    </div>
    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>
        <!-- <ul class="list-group list-group-flush">
            <li class="list-group-item">{{ $penerbit }}</li>
            <li class="list-group-item">{{ $pengarang }}</li>
        </ul> -->
        <div class="d-flex">
            <a href="{{ route('home.edit', $id) }}" class="btn btn-primary ">Edit</a>
            <a href="{{ route('home.show', $id) }}" class="btn btn-success ">Lihat</a>
            <form class="d-inline" action="{{ route('home.destroy', $id) }}" method="post">
                @csrf
                @method('DELETE')
                <a href="" class="btn btn-danger confirm-delete">Hapus</a>
            </form>
        </div>
    </div>
</div>
