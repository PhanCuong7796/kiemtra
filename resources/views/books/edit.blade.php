@extends('master')
@section('title', 'Sửa')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Sửa thông tin sách</h2>
        </div>
        <div class="col-md-12">
            <form method="post" action="{{ route('update', $book->id) }}" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label>Tên sách</label>
                    <input type="text" class="form-control" value="{{ $book->name }}" name="name">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Tác giả</label>
                    <select class="form-control" name="author" id="author">
                        <option value="0" {{ old('author') == 0 ? 'selected' : '' }} disabled selected>
                            Tác giả</option>
                        <option value="Cường Bear" {{ $book->author == 'Cường Bear' ? 'selected' : '' }}>
                            Cường Bear
                        </option>
                        <option value="Hải Thanh" {{ $book->author == 'Hải Thanh' ? 'selected' : '' }}>
                            Hải Thanh</option>
                        <option value="Xuân Cường" {{ $book->author == 'Xuân Cường' ? 'selected' : '' }}>
                            Xuân Cường
                        </option>
                        <option value="Đức Tân" {{ $book->author == 'Đức Tân' ? 'selected' : '' }}>
                            Đức Tân
                        </option>
                        <option value="Nguyên Thuần" {{ $book->author == 'Nguyên Thuần' ? 'selected' : '' }}>
                            Nguyên Thuần
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Thể loại</label>
                    <select class="form-control" name="category" id="category">
                        <option value="0" {{ old('category') == 0 ? 'selected' : '' }} disabled selected>
                            Thể loại
                        </option>
                        <option value="Kinh dị" {{ $book->category == 'Kinh dị' ? 'selected' : '' }}>
                            Kinh dị
                        </option>
                        <option value="Cổ tích" {{ $book->category == 'Cổ tích' ? 'selected' : '' }}>
                            Cổ tích
                        </option>
                        <option value="Châm biếm" {{ $book->category == 'Châm biếm' ? 'selected' : '' }}>
                            Châm biếm
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Số trang</label>
                    <input type="number" value="{{ $book->page }}" class="form-control" name="page">
                    @error('page')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>IBSN</label>

                    <input type="text" value="{{ $book->ISBN }}" class="form-control" name="ISBN">
                    @error('ISBN')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Ngày xuất bản</label>
                    <input type="number" class="form-control" value="{{ $book->Publishing_year }}" name="Publishing_year">
                    @error('Publishing_year')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Sửa</button>
                <button class="btn btn-danger" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>
@endsection
