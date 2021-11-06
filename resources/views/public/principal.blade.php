@extends('layouts.home')

@section('titulo', 'Mizuxe - Principal')

@section('conteudo')
    {{-- Barra de navegação --}}
    <navbar-component
    :itens="[
        {'text': 'home', 'ref': '#home', 'link': ''}, 
        {'text': 'about', 'ref': '#home', 'link': ''},
        {'text': 'meet the authors', 'ref': '#home', 'link': 'http://mizuxe.test'},
        {'text': 'contact', 'ref': '#home', 'link': ''}]"
    image="{{asset('img/mlogo.png')}}">
    </navbar-component>

    {{-- Showcase--}}
    <showcase-component></showcase-component>

    {{-- Newsletter --}}
    <newsletter-component></newsletter-component>
    
    {{-- Box --}}
    <box-component :card="[
        {'title': 'be better', 'text': 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, cum.'},
        {'title': 'be smarter', 'text': 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, cum.'},
        {'title': 'be faster', 'text': 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, cum.'},
        {'title': 'be stronger', 'text': 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, cum.'},
    ]">
    </box-component>

    {{-- Why Section --}}
    <why-component></why-component>

    {{-- Authors Section --}}
    <authors-component :authors="[
        {'name': 'Susan Williams', 'image': '/img/person1.jpg', 'function': 'Lead Writer', 'feedback': 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus incidunt dolorum beatae, inventore porro quaerat.'},
        {'name': 'Grace Smith', 'image': '/img/person2.jpg', 'function': 'Co-Writer', 'feedback': 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus incidunt dolorum beatae, inventore porro quaerat.'},
        {'name': 'John Doe', 'image': '/img/person3.jpg', 'function': 'Editor', 'feedback': 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus incidunt dolorum beatae, inventore porro quaerat.'},
        {'name': 'Kevin Swanson', 'image': '/img/person4.jpg', 'function': 'Designer', 'feedback': 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus incidunt dolorum beatae, inventore porro quaerat.'}
    ]"></authors-component>

    {{-- Contact Section --}}
    <contact-component></contact-component>
@endsection