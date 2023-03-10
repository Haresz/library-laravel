<tr style="background: #E5E7EE;" >
    <td class="align-middle">{{ $id }}</td>
    <td class="align-middle">
        <img src="{{ $image }}" alt="" width="100">
    </td>
    <td class="align-middle">{{ $title }}</td>
    <td class="align-middle">{{ $author }}</td>
    <td class="align-middle">{{ $publisher }}</td>
    <td class="align-middle">
        <a href="{{ route('admin.edit', $id) }}" style="width: 140px;">Ubah</a>
        <form class="d-inline" action="{{ route('admin.destroy', $id) }}" method="post">
            @csrf
            @method('DELETE')
            <a href="" style="width: 140px;" class="confirm-delete">Hapus</a>
        </form>
        <a href="{{ route('admin.show', $id) }}" style="width: 140px;">Lihat</a>
    </td>
</tr>
