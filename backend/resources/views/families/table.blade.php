@extends('layouts.main')

@section("title",$title)

@section("content")

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">{{$title}} - Táblázat</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h2>{{$title}}</h2>
        </div>
        <div class="col-12">
            <table class="table table-striped">
                <thead class="text-center">
                    <tr>
                        <th>Név</th>
                        <th>Család</th>
                        <th>Év</th>
                        <th>Részletek</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($characters as $slug=>$value)
                        @foreach($value as $key=>$character)
                            @php $url = route('families.show', ['slug' => $slug,'id'=>$key]) @endphp
                            <tr>
                                <td>{{$character['character']}}</td>
                                <td>{{$character['family']}}</td>
                                <td>{{$character['year']}}</td>
                                <td><a href="{{$url}}" class="btn">Részletek</a></td>
                            </tr>
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection