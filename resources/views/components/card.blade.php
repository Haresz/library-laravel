<div class="card col m-2" style="width: 18rem;">
    <img src="{{ $image }}" class="card-img-top" alt="sampul-buku">
    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>
        <div class="d-flex">
            <a href="{{ route('home.edit', $id) }}" class="btn btn-primary ">Edit</a>
            <a href="{{ route('home.show', $id) }}" class="btn btn-success ">Lihat</a>
            <form method="post" action="{{ route('home.destroy', $id) }}">
                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger mx-4">Hapus</button>
            </form>
        </div>
    </div>
</div>
