<div class="card my-2 w-25">
    <div class="card-img-top h-100 w-100" style="display: flex; justify-content: center; align-items: center; background-color: gray;">
        <img src="{{ $image }}" class="w-100 align-middle" alt="sampul-buku">
    </div>
    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>
        <ul class="list-group list-group-flush">
            <li class="list-group-item p-0 py-2">Pengarang : {{ $author }}</li>
            <li class="list-group-item p-0 py-2">Penerbit  : {{ $publisher }}</li>
        </ul>
        @if ($admin)
            <div class="d-flex w-100 justify-content-between mt-4">
                <a href="{{ route('admin.edit', $id) }}" class="btn btn-primary rounded-pill" style="width: 140px; background: #364FF6;">Ubah</a>
                <form class="d-inline" action="{{ route('admin.destroy', $id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <a href="" style="width: 140px;" class="btn btn-outline-danger confirm-delete rounded-pill">Hapus</a>
                </form>
            </div>
            <a href="{{ route('admin.show', $id) }}" class="btn btn-success w-100 mt-2 rounded-pill">Lihat</a>
        @endif
    </div>
</div>
