<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\books;
use Illuminate\Support\Facades\Validator;

class BooksController extends Controller
{
    /**
     * search function
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function search(Request $request)
    {
        $search = $request->get('search');
        $books = books::where('Judul', 'like', '%'.$search.'%')->paginate(5);
        return view('listbuku', compact('books'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $book = $request->get('book');
        if ($book){
            $books = books::where('books_name', 'like', '%'.$book.'%')->paginate(5);
        }else{
            $books = books::paginate(8);
        }

        return view('listbuku', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Validator $validator)
    {
        $validator = Validator::make($request->all(), [
            'Judul' => 'required',
            'Penerbit' => 'required',
            'Pengarang' => 'required',
            'sampul' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('add')
                        ->withErrors($validator)
                        ->withInput();
        }

        return redirect('add')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = books::find($id);
        return view('formupdate', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $book = books::find($id);
        $book->Judul = $request->Judul;
        $book->Penerbit = $request->Penerbit;
        $book->Pengarang = $request->Pengarang;
        $book->sampul = $request->sampul;
        $book->save();

        session()->flash('success', 'Data berhasil diupdate');
        return redirect()->route('formupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = books::find($id);
        $book->destroy();

        session()->flash('success', 'Data berhasil dihapus');
        return redirect()->route('destroy.listbuku');
    }
}
