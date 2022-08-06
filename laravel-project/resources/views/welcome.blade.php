@extends('layouts.main')
@section('title','HDC Events')
@section('content')
<h1>Algum titulo</h1>
    @if($nome == 'Abimael')
        <p>A condição dada foi verdadeira</p>
        <p>O nome dele é {{$nome}} e a idade é {{$idade}} </p>
    @else
        <p>A condição é falsa</p>
    @endif
    @for($i = 0;$i < count($arr) ;$i++)
        <p>{{$arr[$i]}} o indice é: {{$i}} </p>
    @endfor

@endsection

