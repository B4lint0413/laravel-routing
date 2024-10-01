@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Routing gyakorlás</h1>

            <h2>Idézetek</h2>
            <ul>
                @if(Route::has("house"))
                <li><a href="{{route("house")}}">House</a></li>
                @endif

                @if(Route::has("modern-family"))
                <li><a href="{{route("modern-family")}}">Modern Family</a></li>
                @endif

                @if(Route::has("uvegtigris.csoki"))
                <li><a href="{{route("uvegtigris.csoki")}}">Üvegtigris: Csoki</a></li>
                @endif
                @if(Route::has("uvegtigris.lali"))
                <li><a href="{{route("uvegtigris.lali")}}">Üvegtigris: Lali</a></li>
                @endif

                @if(Route::has("harry-potter"))
                <li><a href="{{route("harry-potter", ["slug" => "hermione"] )}}">Harry Potter: Hermione</a></li>
                <li><a href="{{route("harry-potter", ["slug" => "fred-es-george"] )}}">Harry Potter: Fred és George</a></li>
                @endif
            </ul>
            </li>
            </ul>

            @if(Route::has("calendar.today") || Route::has("calendar.yesterday") || Route::has("calendar.tomorrow") )
            <h2>Naptár</h2>
            <ul>
                @if(Route::has("calendar.today"))
                <li><a href="{{route("calendar.today")}}">Ma</a></li>
                @endif
                @if(Route::has("calendar.yesterday"))
                <li><a href="{{route("calendar.yesterday")}}">Tegnap</a></li>
                @endif
                @if(Route::has("calendar.tomorrow"))
                <li><a href="{{route("calendar.tomorrow")}}">Holnap</a></li>
                @endif
            </ul>
            @endif

            @if(Route::has("calculator"))
            <h2>Számológép példák</h2>

            <ul>
                <li><a href="{{route("calculator", ["a" => 3, "b" => 2, "operator" => "+"])}}">3+2</a></li>
                
                <li><a href="{{route("calculator", ["a" => 5, "b" => 0, "operator" => "-"])}}">5-0</a></li>
                
                <li><a href="{{route("calculator", ["a" => 5, "b" => 0, "operator" => "/"])}}">5/0</a></li>
            </ul>
            @endif
        </div>
    </div>
</div>
@endsection
