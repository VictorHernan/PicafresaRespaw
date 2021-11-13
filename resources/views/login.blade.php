@extends('templates.master')

@section('barra')
 <h2>Evangelion Personajes</h2>
 <ul>
     <br><li><a href="">Shinji Ikari</a></li>
     <br><li><a href="">Asuka Langley Sohryu</a></li>
     <br><li><a href="">Rei Ayanami</a></li>
     <br><li><a href="">Mari Illustrious Makinami</a></li>
     <br><li><a href="">Kaworu Nagisa</a></li>
     <br><li><a href="">Misato Katsuragi</a></li>
     <br><li><a href="">Pen Pen</a></li>
 </ul>
@stop

@section('header')
 <h1>AniWiki</h1>
 <hr>
@stop


@section('nav')
  <form action="{{route('calculaarea')}}" method="POST">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="inbase" class="form-label">Usuario</label>
        <input type="text" class="form-control" name="inusuario" id="inusuario">
    </div>
    <div class="mb-3">
        <label for="inaltura" class="form-label">Contraseña</label>
        <input type="password" class="form-control" name="incontra" id="incontra">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@stop



@section('content')
<font face="Comic Sans MS,Arial,Verdana">
 
g
</font>
r
@stop



@section('footer')
Víctor Hernández Hinojos - {{date('D/M/Y')}}
@stop