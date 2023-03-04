<div class="card col m-2" style="width: 18rem;">
    <img src="{{ $image }}" class="card-img-top" alt="sampul-buku">
    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>
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
