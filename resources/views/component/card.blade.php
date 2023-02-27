<div class="card col m-2" style="width: 18rem;">
    <img src="{{$src}}" class="card-img-top" alt="sampul-buku">
    <div class="card-body">
        <h5 class="card-title">{{$title}}</h5>
        <div class="d-flex">
            <a href="/edit/{{$id}}" class="btn btn-primary ">Edit</a>
            <a href="/delete/{{$id}}" class="btn btn-danger mx-4">Hapus</a>
        </div>
    </div>
</div>