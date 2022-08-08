@extends('master')
@section('title', 'Thêm mới sách mới')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2>Thêm mới sách</h2>
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
                        <option value="Nguyễn Du">Nguyễn Du</option>
                        <option value="Nguyễn Trãi">Nguyễn Trãi</option>
                        <option value="Hồ Xuân Hương">Hồ Xuân Hương</option>
                        <option value="Ngô Tất Tố">Ngô Tất Tố</option>
                        <option value="Nam Cao">Nam Cao</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Thể loại</label>
                    <select class="form-control" name="category" id="category">
                        <option value="Chiến tranh">Chiến tranh</option>
                        <option value="Tình cảm">Tình cảm</option>
                        <option value="Viễn tưởng">Viễn tưởng</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Số trang</label>
                    <input type="number" class="form-control" name="page"></input>
                    @error('page')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>ISBN</label>
                    <input type="text" class="form-control" name="ISBN"></input>
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
                    </input>
                </div>

                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>
@endsection
