@extends('master')
@section('title', 'Quản lý cửa hàng sách')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Danh Mục Sách</h2>
            <a href="{{ route('create') }}" class="btn btn-primary">Thêm sách</a>
        </div>
        <div class="col-12">
            @if (Session::has('message'))
                <p class="text-success">
                    <i class="fa fa-check" aria-hidden="true"></i>
                    {{ Session::get('message') }}
                </p>
            @endif
        </div>
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Tên Sách</th>
                        <th scope="col">IBSN</th>
                        <th scope="col">Tác giả</th>
                        <th scope="col">Thể loại</th>
                        <th scope="col">Số trang</th>
                        <th scope="col">Năm xuất bản</th>
                        <th scope="col">Hành động</th>
                    </tr>
                </thead>
                <div class="form-group">
                    <tbody>
                        @foreach ($books as $key => $book)
                            <tr>
                                <td>{{ $book->id }}</td>
                                <td>{{ $book->name }}</td>
                                <td>{{ $book->ISBN }}</td>
                                <td>{{ $book->author }}</td>
                                <td>{{ $book->category }}</td>
                                <td>{{ $book->page }}</td>
                                <td>{{ $book->Publishing_year }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('edit', $book->id) }}" class="btn btn-primary">Sửa</a>
                                    <form method="post" action="{{ route('destroy', $book->id) }}">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class=" btn btn-danger"
                                            onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xóa</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </div>
            </table>

        </div>
    </div>
    {{ $books->links() }}
@endsection
