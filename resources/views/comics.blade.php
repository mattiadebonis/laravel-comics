@extends('layouts.main')
@section("content")

    <div id="comics-container">
        <ul class="size-page">
            @foreach($comics as $item)
                <li>
                    <img src="{{$item['thumb']}}" alt="">
                    <h5>{{$item["title"]}}</h5>
                </li>
            @endforeach
        </ul>
    </div>
    @include("partials.bannershop")
    
@endsection