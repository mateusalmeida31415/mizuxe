@extends('layouts.home')

@section('titulo', 'Mizuxe - Principal')

@section('conteudo')
    <navbar-component
    :itens="[
        {'text': 'home', 'ref': '#home', 'link': ''}, 
        {'text': 'about', 'ref': '#home', 'link': ''},
        {'text': 'meet the authors', 'ref': '#home', 'link': 'http://mizuxe.test'},
        {'text': 'contact', 'ref': '#home', 'link': ''}]">
    </navbar-component>
@endsection