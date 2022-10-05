@extends('master')
@section('title', 'Thêm mới sách mới')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2>Thêm sách</h2>
        </div>

        <div class="col-md-12">
            <form method="post" action="{{ route('store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Tên sách</label>
                    <input type="text" class="form-control" name="name">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Tác giả</label>
                    <select class="form-control" name="author" id="author">
                        <option value="Cường Bear">Cường Bear</option>
                        <option value="Hải Thanh">Hải Thanh</option>
                        <option value="Xuân Cường">Xuân Cường</option>
                        <option value="Đức Tân">Đức Tân</option>
                        <option value="Nguyên Thuần">Nguyên Thuần</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Thể loại</label>
                    <select class="form-control" name="category" id="category">
                        <option value="Kinh dị">Kinh dị</option>
                        <option value="Cổ tích">Cổ tích</option>
                        <option value="Châm biếm">Châm biếm</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Số trang</label>
                    <input type="number" class="form-control" name="page">
                    @error('page')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>ISBN</label>
                    <input type="text" class="form-control" name="ISBN">
                    @error('ISBN')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Ngày xuất bản</label>
                    <input type="number" class="form-control" name="Publishing_year">
                    @error('Publishing_year')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <button class="btn btn-danger" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>
@endsection
