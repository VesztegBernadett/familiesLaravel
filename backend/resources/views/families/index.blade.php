@extends('layouts.main')

@section("title",$title)

@section("content")

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">{{$title}}</h1>
        </div>
        <div class="col-12">
            <ul>
                @foreach($families as $key => $value)
                @php $url = route('families.list', ['slug' => $key]) @endphp
                <li><a href="{{$url}}">{{$value}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

@endsection