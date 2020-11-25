@extends('master')
@section('content')
<ul>
@foreach($pe as $p)
    <li>{{ $p }}</li>
    @endforeach
    <button type="button" class="btn btn-primary">Comprar</button>
</ul>
<ul>
@foreach($ah as $p)
    <li>{{ $p }}</li>
    @endforeach
    <button type="button" class="btn btn-primary">Comprar</button>
</ul>
@stop