<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $length = request()->get('length'); // Get length

        if ($length) { // If length not empty
            $data['books'] = Book::paginate($length); // Get all books
        } else {
            $data['books'] = Book::paginate(10); // Get all books
        }

        return view('pages.dashboard.admin', $data); // Return view with data
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partials.form.admin.create'); // Return view
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = validator($request->all(), [ // Validate request
            'judul' => ['required', 'string', 'max:255', 'unique:books,judul'],
            'penerbit' => ['required', 'string', 'max:255'],
            'pengarang' => ['required', 'string', 'max:255'],
            'sampul' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:4096', 'dimensions:min_width=100,min_height=100'],
        ]);

        if ($validator->fails()) { // If validation fails
            toastr()->error('Data gagal ditambahkan', 'Error'); // Show error message

            return back()->withInput(); // Redirect back with input
        }

        $validated = $validator->validated(); // Get validated data

        $image = $validated['sampul']; // Get image file
        $new_name = uniqid() . '_' . date('Ymd') . '_' . date('His') . '.' . $image->getClientOriginalExtension(); // Generate new image name

        if (!Storage::exists('/public/' . $new_name)) { // If image not exists
            $image->storeAs('public', $new_name); // Store image
        }

        $validated['sampul'] = $request->getSchemeAndHttpHost() . '/storage/' . $new_name; // Set image url

        Book::create($validated); // Create new book

        toastr()->success('Data berhasil ditambahkan', 'Success'); // Show success message

        return to_route('admin.index'); // Redirect to admin
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['book'] = Book::find($id); // Get book by id

        if (!$data['book']) { // If book not found
            toastr()->error('Data tidak ditemukan', 'Error'); // Show error message

            return to_route('admin.index'); // Redirect to admin
        }

        return view('partials.form.admin.show', $data); // Return view with data
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['book'] = Book::find($id); // Get book by id

        if (!$data['book']) { // If book not found
            toastr()->error('Data tidak ditemukan', 'Error'); // Show error message

            return to_route('admin.index'); // Redirect to admin
        }

        return view('partials.form.admin.edit', $data); // Return view with data
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
        $book = Book::find($id); // Get book by id

        if (!$book) { // If book not found
            toastr()->error('Data tidak ditemukan', 'Error'); // Show error message

            return back()->withInput(); // Redirect back with input
        }

        $validator = validator($request->all(), [ // Validate request
            'judul' => ['required', 'string', 'max:255', 'unique:books,judul,' . $book->id],
            'penerbit' => ['required', 'string', 'max:255'],
            'pengarang' => ['required', 'string', 'max:255'],
            'sampul' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:4096', 'dimensions:min_width=100,min_height=100'],
        ]);

        if ($validator->fails()) { // If validation fails
            toastr()->error('Data gagal diupdate', 'Error'); // Show error message

            return back()->withInput(); // Redirect back with input
        }

        $validated = $validator->validated(); // Get validated data

        if (!empty($validated['sampul'])) { // If image not empty
            $image = $validated['sampul']; // Get image file
            $new_name = uniqid() . '_' . date('His') . '.' . $image->getClientOriginalExtension(); // Generate new image name

            if (!empty($book->sampul)) { // If image not empty
                $parse = parse_url($book->sampul); // Parse image url
                $oldImage = explode('/', $parse['path']); // Get image name

                if (Storage::exists('/public/' . $oldImage[2])) { // If image exists
                    Storage::delete('/public/' . $oldImage[2]); // Delete image
                }
            }

            if (!Storage::exists('/public/' . $new_name)) { // If image not exists
                $image->storeAs('public', $new_name); // Store image
            }

            $validated['sampul'] = $request->getSchemeAndHttpHost() . '/storage/' . $new_name; // Set image url
        }

        $book->update($validated); // Update book

        toastr()->success('Data berhasil diupdate', 'Success'); // Show success message

        return to_route('admin.index'); // Redirect to admin
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id); // Get book by id

        if (!$book) { // If book not found
            toastr()->error('Data gagal dihapus', 'Error'); // Show error message

            return back()->withInput(); // Redirect back with input
        }

        if (!empty($book->sampul)) { // If image not empty
            $parse = parse_url($book->sampul); // Parse image url
            $oldImage = explode('/', $parse['path']); // Get image name

            if (Storage::exists('/public/' . $oldImage[2])) { // If image exists
                Storage::delete('/public/' . $oldImage[2]); // Delete image
            }
        }

        $book->delete(); // Delete book

        toastr()->success('Data berhasil dihapus', 'Success'); // Show success message

        return to_route('admin.index'); // Redirect to admin
    }
}
