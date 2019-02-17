@extends('movies.home')
@section('content')
    <div class="container">
        <div class="col-12 col-md-12">
            <div class="row">
                <div class="col-12">
                    <h1 style="text-align: center">Thêm phim mới</h1>
                </div>
                <div class="col-12">
                    <form method="post" action="{{route('store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Tên phim</label>
                            <input type="text" name="name" class="form-control"/>
                            {{--@if($errors->has('name'))--}}
                            {{--<p class="help is-danger" style="color: red;">{{ $errors->first('name') }}</p>--}}
                            {{--@endif--}}
                        </div>
                        <div class="form-group">
                            <label>Mô tả</label>
                            <input type="text" name="description" class="form-control">
                            {{--@if($errors->has('quantityOfBedroom'))--}}
                            {{--<p class="help is-danger"--}}
                            {{--style="color: red;">{{ $errors->first('quantityOfBedroom') }}</p>--}}
                            {{--@endif--}}
                        </div>
                        <div class="form-group">
                            <label>Poster</label>
                            <input type="file" name="poster" class="form-control">
                            {{--@if($errors->has('quantityOfBedroom'))--}}
                            {{--<p class="help is-danger"--}}
                            {{--style="color: red;">{{ $errors->first('quantityOfBedroom') }}</p>--}}
                            {{--@endif--}}
                        </div>
                        <div class="form-group">
                            <label>Thời lượng</label>
                            <input type="number" name="time" class="form-control">
                            {{--@if($errors->has('quantityOfBathroom'))--}}
                            {{--<p class="help is-danger"--}}
                            {{--style="color: red;">{{ $errors->first('quantityOfBathroom') }}</p>--}}
                            {{--@endif--}}
                        </div>
                        <div class="form-group">
                            <label>Thể loại</label>
                            <input type="text" name="category" class="form-control">
                            {{--@if($errors->has('price'))--}}
                            {{--<p class="help is-danger" style="color: red;">{{ $errors->first('price') }}</p>--}}
                            {{--@endif--}}
                        </div>
                        <div class="form-group">
                            <label>Rạp chiếu</label>
                            <select name="cinemas[]" class="custom-select" multiple>
                                @foreach($cinemas as $key => $cinema)
                                    <option value="{{$key}}">{{$cinema}}</option>
                                @endforeach
                            </select>
                            {{--@if($errors->has('price'))--}}
                            {{--<p class="help is-danger" style="color: red;">{{ $errors->first('price') }}</p>--}}
                            {{--@endif--}}
                        </div>
                        <div class="form-group">
                            <label>Ngày phát hành</label>
                            <input type="date" name="releaseDate" class="form-control">
                            {{--@if($errors->has('address'))--}}
                            {{--<p class="help is-danger" style="color: red;">{{ $errors->first('address') }}</p>--}}
                            {{--@endif--}}
                        </div>
                        <div style="margin-bottom: 50px">
                            <button type="submit" class="btn btn-primary">Thêm mới</button>
                            <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Quay lại
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
