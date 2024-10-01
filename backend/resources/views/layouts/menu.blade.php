<nav class="navbar navbar-expand-lg bg-dark navbar-dark" >
  <div class="container-fluid">
    <a class="navbar-brand" href="{route("house")}">Routing gyakorlás</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        @if(Route::has("house") || Route::has("modern-family")|| Route::has("uvegtigris.csoki")|| Route::has("uvegtigris.lali")|| Route::has("harry-potter"))

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Idézetek
          </a>
          <ul class="dropdown-menu">
            @if(Route::has("house"))
            <li><a class="dropdown-item" href="{{route("house")}}">House</a></li>
            <li><hr class="dropdown-divider"></li>
            @endif

            @if(Route::has("modern-family"))
            <li><a class="dropdown-item" href="{{route("modern-family")}}">Modern Family</a></li>
            <li><hr class="dropdown-divider"></li>
            @endif

            @if(Route::has("uvegtigris.csoki") || Route::has("uvegtigris.lali"))
            @if(Route::has("uvegtigris.csoki"))<li><a class="dropdown-item" href="{{route("uvegtigris.csoki")}}">Üvegtigris: Csoki</a></li>@endif
            @if(Route::has("uvegtigris.lali"))<li><a class="dropdown-item" href="{{route("uvegtigris.lali")}}">Üvegtigris: Lali</a></li>@endif
            <li><hr class="dropdown-divider"></li>
            @endif

            @if(Route::has("harry-potter"))
            <li><a class="dropdown-item" href="{{route("harry-potter", ["slug" => "hermione"] )}}">Harry Potter: Hermione</a></li>
            <li><a class="dropdown-item" href="{{route("harry-potter", ["slug" => "fred-es-george"] )}}">Harry Potter: Fred és George</a></li>
            @endif

          </ul>
        </li>
            @endif

            @if(Route::has("calendar.today") || Route::has("calendar.yesterday") || Route::has("calendar.tomorrow") )
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Naptár
          </a>
          <ul class="dropdown-menu">
            @if(Route::has("calendar.today"))<li><a class="dropdown-item" href="{{route("calendar.today")}}">Ma</a></li>@endif
            @if(Route::has("calendar.yesterday"))<li><a class="dropdown-item" href="{{route("calendar.yesterday")}}">Tegnap</a></li>@endif
            @if(Route::has("calendar.tomorrow"))<li><a class="dropdown-item" href="{{route("calendar.tomorrow")}}">Holnap</a></li>@endif
            @if(Route::has("weekday.number"))<li><a class="dropdown-item" href="{{route("weekday.number",["name" => "hétfő"])}}">Hétfő</a></li>@endif
            @if(Route::has("weekday.name"))<li><a class="dropdown-item" href="{{route("weekday.name",["number" => 1])}}">A hét 1. napja</a></li>@endif
            
          </ul>
        </li>
        @endif
      </ul>
    </div>
  </div>
</nav>