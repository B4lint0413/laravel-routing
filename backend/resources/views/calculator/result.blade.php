@extends('layouts.main')

@section("title", $title)

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-3">{{$title}}</h1>

            <p>{{$a}} {{$operator}} {{$b}} = {{$result}}</p>
            
        </div>
    </div>
</div>
@endsection