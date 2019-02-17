@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-12">
            @if (Session::has('success'))
                <p class="text-success">
                    <i class="fa fa-check" aria-hidden="true"></i>
                    {{ Session::get('success') }}
                </p>
            @endif
        </div>
        <div class="col">
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('create') }}">Create</a>
            </div>

            <table class="table table-striped text-center">
                <thead>
                <tr>
                    <th scope="col">Tên phim</th>
                    <th scope="col">Poster</th>
                    <th scope="col">Thời lượng</th>
                    <th scope="col">Rạp chiếu</th>
                </tr>
                </thead>
                @if(count($movies) == 0)
                    <tr>
                        <td colspan="4">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach($movies as $key => $movie)
                        <tr>
                            <td><a href="{{route('show', $movie->id)}}">{{$movie->name}}</a></td>
                            <td>
                                @if($movie->poster)
                                    <img src="{{asset('storage/' . $movie->poster)}}"
                                         style="height:200px; width:200px">
                                @else
                                    {{'Chưa có ảnh'}}
                                @endif
                            </td>
                            <td>{{$movie->time}}</td>
                            @if($movie->cinemas)
                                <td>
                                    @foreach($movie->cinemas as $cinema)
                                        <div>{{$cinema->name}}</div>
                                    @endforeach
                                </td>
                            @else
                                <td>Chua co</td>
                            @endif
                        </tr>
                    @endforeach
                @endif
            </table>

        </div>
    </div>

@endsection
