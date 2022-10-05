<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use Illuminate\Support\Facades\Log;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::latest()->paginate(5);
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookRequest $request)
    {
        // dd($request);
        $book = new Book();
        $book->name = $request->name;
        $book->author = $request->author;
        $book->page = $request->page;
        $book->category = $request->category;
        $book->Publishing_year = $request->Publishing_year;
        $book->ISBN = $request->ISBN;
        // dd($book);
        try {
            $book->save();
            return redirect()->route('index')->with('message', 'Thêm sách thành công');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->route('index')->with('message', 'Thêm sách thất bại');
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::find($id);
        // dd($book);
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookRequest  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookRequest $request, $id)
    {

        $book = Book::find($id);
        // dd($book);
        $book->name = $request->name;
        $book->author = $request->author;
        $book->page = $request->page;
        $book->category = $request->category;
        $book->Publishing_year = $request->Publishing_year;
        $book->ISBN = $request->ISBN;
        $book->save();
        try {
            $book->save();
            return redirect()->route('index')->with('message', 'Sửa sách thành công');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->route('index')->with('message', 'Sửa sách thất bại');
        }
        // return redirect()->route('index')->with('message', 'Sửa sách thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book, $id)
    {
        $book = Book::find($id);
        $book->delete($id);
        return redirect()->back()->with('message', 'Xóa thành công');
    }
}
