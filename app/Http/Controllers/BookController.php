<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = [];
        $search = $request->get('book');

        if ($search) {
            $data['books'] = Book::where('judul', 'like', '%' . $search . '%')->paginate(12);
        } else {
            $data['books'] = Book::latest()->paginate(12);
        }

        return view('pages.dashboard.buku', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partials.form.buku.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = validator($request->all(), [
            'judul' => ['required', 'string', 'max:255', 'unique:books,judul'],
            'penerbit' => ['required', 'string', 'max:255'],
            'pengarang' => ['required', 'string', 'max:255'],
            'sampul' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:4096', 'dimensions:min_width=100,min_height=100'],
        ]);

        if ($validator->fails()) {
            toastr()->error('Data gagal ditambahkan', 'Error');

            return back()->withInput();
        }

        $validated = $validator->validated();

        $image = $validated['sampul'];
        // belum paham sama codingan nya
        $new_name = uniqid() . '_' . date('His') . '.' . $image->getClientOriginalExtension();

        if (!Storage::exists('/public/' . $new_name)) {
            $image->storeAs('public', $new_name);
        }

        $validated['sampul'] = $request->getSchemeAndHttpHost() . '/storage/' . $new_name;

        Book::create($validated);

        toastr()->success('Data berhasil ditambahkan', 'Success');

        return to_route('home.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['book'] = Book::find($id);

        if (!$data['book']) {
            return to_route('home.index');
        }

        return view('partials.form.buku.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['book'] = Book::find($id);

        if (!$data['book']) {
            return to_route('home.index');
        }

        return view('partials.form.buku.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::find($id);

        if (!$book) {
            toastr()->error('Data gagal diupdate', 'Error');

            return back()->withInput();
        }

        $validator = validator($request->all(), [
            'judul' => ['required', 'string', 'max:255', 'unique:books,judul,' . $book->id],
            'penerbit' => ['required', 'string', 'max:255'],
            'pengarang' => ['required', 'string', 'max:255'],
            'sampul' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:4096', 'dimensions:min_width=100,min_height=100'],
        ]);

        if ($validator->fails()) {
            toastr()->error('Data gagal diupdate', 'Error');

            return back()->withInput();
        }

        $validated = $validator->validated();

        $image = $validated['sampul'];
        $new_name = uniqid() . '_' . date('His') . '.' . $image->getClientOriginalExtension();

        if (!empty($book->sampul)) {
            $parse = parse_url($book->sampul);
            $oldImage = explode('/', $parse['path']);

            if (Storage::exists('/public/' . $oldImage[2])) {
                Storage::delete('/public/' . $oldImage[2]);
            }
        }

        if (!Storage::exists('/public/' . $new_name)) {
            $image->storeAs('public', $new_name);
        }

        $validated['sampul'] = $request->getSchemeAndHttpHost() . '/storage/' . $new_name;

        $book->update($validated);

        toastr()->success('Data berhasil diupdate', 'Success');

        return to_route('home.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);

        if (!$book) {
            toastr()->error('Data gagal dihapus', 'Error');

            return back()->withInput();
        }

        if (!empty($book->sampul)) {
            $parse = parse_url($book->sampul);
            $oldImage = explode('/', $parse['path']);

            if (Storage::exists('/public/' . $oldImage[2])) {
                Storage::delete('/public/' . $oldImage[2]);
            }
        }

        $book->delete();

        toastr()->success('Data berhasil dihapus', 'Success');

        return to_route('home.index');
    }

    /**
     * Search specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $book = $request->get('search');

        if ($book) {
            $books = Book::where('judul', 'like', '%' . $book . '%')->paginate(5);
        } else {
            $books = Book::paginate(12);
        }

        return view('pages.dashboard.buku', compact('books'));
    }
}
