@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-12">
            <div class="row">
                <div class="col-12"><h1 style="text-align: center">{{$movie->name}}</h1></div>
                <div>
                    <div class="col-12" style="margin-left: 1000px">
                        <a class="btn btn-success" href="{{ route('edit', $movie->id) }}">Edit</a>
                        <a class="btn btn-danger" href="{{ route('delete', $movie->id) }}"
                           onclick="return confirm('Bạn chắc chắn muốn xóa?')">Delete</a>

                    </div>
                    <div class="col-12">
                        @if (Session::has('success'))
                            <p class="text-success">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                {{ Session::get('success') }}
                            </p>
                        @endif
                    </div>
                    <h4 scope="col">Poster :</h4>
                    @if($movie->poster)
                        <img src="{{asset('storage/' . $movie->poster)}}" style="height:200px; width:200px">
                    @else
                        {{'Chưa có ảnh'}}
                    @endif
                    <h4 scope="col">Mô tả :</h4>
                    <p>{{$movie->description}}</p>
                    <h4 scope="col">Thời lượng:</h4>
                    <p>{{$movie->time}}</p>
                    <h4 scope="col">Thể loại:</h4>
                    <p>{{$movie->category}}</p>
                    <h4 scope="col">Ngày phát hành:</h4>
                    <p>{{$movie->releaseDate}}</p>
                </div>
            </div>
            <div style="margin-bottom: 50px ">
                <a class="btn btn-dark" href="{{ route('index') }}">Quay lại</a>
            </div>
        </div>
    </div>
@endsection
