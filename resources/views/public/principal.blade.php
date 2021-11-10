@extends('layouts.home')

@section('titulo', 'Principal')

@section('conteudo')
    {{-- Barra de navegação --}}
    <navbar-component
    id="main-nav"
    :itens="[
        {'text': 'home', 'ref': '#showcase', 'link': ''}, 
        {'text': 'about', 'ref': '#why', 'link': ''},
        {'text': 'meet the authors', 'ref': '#authors', 'link': ''},
        {'text': 'contact', 'ref': '#contact', 'link': ''}]"
    image="{{asset('img/mlogo.png')}}"
    link="{{env('APP_URL')}}"
    title="mizuxe">
    </navbar-component>

    {{-- Showcase--}}
    <showcase-component 
    id="showcase"
    title="Do What You Dream Of..."
    text="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia accusamus quaerat velit incidunt provident ullam sint blanditiis optio nesciunt nam!"
    link="#"
    image="img/book.png"
    alt="Book Cover"></showcase-component>

    {{-- Newsletter --}}
    <newsletter-component
    id="newsletter"
    :inputs="[
        {'type': 'text', 'placeholder': 'Username', 'value': ''},
        {'type': 'email', 'placeholder': 'E-mail', 'value': ''}
    ]"
    btn-text="Cadastrar"></newsletter-component>
    
    {{-- Box --}}
    <box-component :card="[
        {'title': 'be better', 'text': 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, cum.'},
        {'title': 'be smarter', 'text': 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, cum.'},
        {'title': 'be faster', 'text': 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, cum.'},
        {'title': 'be stronger', 'text': 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, cum.'},
    ]">
    </box-component>

    {{-- Why Section --}}
    <why-component 
    id="why"
    title="Why This Book?"
    text="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae, quasi."
    :accordion="[
        {'title': 'Get Inspired' , 'text': 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime dicta neque ducimus nostrum officiis exercitationem, ratione aliquid provident possimus aperiam rem perspiciatis, adipisci laboriosam necessitatibus officia ut porro odio voluptas dolore aut inventore eveniet labore? Et veritatis provident iure, alias eveniet sit ex eaque nesciunt repudiandae dolores eius ducimus fuga!'},
        {'title': 'Gain The Knowledge', 'text': 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt magnam ullam voluptates voluptate illum consequatur minus pariatur dolorum. Vitae saepe dicta harum aperiam nihil quasi ipsum ipsam asperiores ratione perferendis, labore cupiditate vel incidunt voluptate necessitatibus doloremque porro magni amet consectetur facere, at voluptas quo! Alias laborum possimus facilis unde?'},
        {'title': 'Open Your', 'text': 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima praesentium ratione ex dolorem nihil doloremque laboriosam laudantium dicta totam mollitia dolorum aliquam delectus blanditiis neque, ea aperiam repellat accusamus eius atque alias eum nobis culpa voluptatibus. Mollitia, blanditiis, fugiat aut debitis quisquam nobis harum perspiciatis numquam aliquam eaque ut omnis!'}]"></why-component>

    {{-- Authors Section --}}
    <authors-component 
    id="authors"
    title="Meet The Authors" 
    text="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione nihil reprehenderit corporis in at consequuntur?"
    :authors="[
            {
                'name': 'Susan Williams', 
                'image': '/img/person1.jpg', 
                'function': 'Lead Writer', 
                'feedback': 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus incidunt dolorum beatae, inventore porro quaerat.', 
                'redes': [
                    {
                        'icon': 'fab fa-facebook-square fa-2x', 
                        'link': 'https://www.facebook.com'
                    },
                    {
                        'icon': 'fab fa-twitter-square fa-2x', 
                        'link': 'https://twitter.com/'
                    },
                    {
                        'icon': 'fab fa-instagram-square fa-2x', 
                        'link': 'https://www.instagram.com/'
                    }
                ]
            },
            {
                'name': 'Grace Smith', 
                'image': '/img/person2.jpg', 
                'function': 'Co-Writer', 
                'feedback': 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus incidunt dolorum beatae, inventore porro quaerat.',
                'redes': [
                    {
                        'icon': 'fab fa-facebook-square fa-2x', 
                        'link': 'https://www.facebook.com'
                    },
                    {
                        'icon': 'fab fa-twitter-square fa-2x', 
                        'link': 'https://twitter.com/'
                    },
                    {
                        'icon': 'fab fa-instagram-square fa-2x', 
                        'link': 'https://www.instagram.com/'
                    }
                ]
            },
            {
                'name': 'John Doe', 
                'image': '/img/person3.jpg', 
                'function': 'Editor', 
                'feedback': 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus incidunt dolorum beatae, inventore porro quaerat.',
                'redes': [
                    {
                        'icon': 'fab fa-facebook-square fa-2x', 
                        'link': 'https://www.facebook.com'
                    },
                    {
                        'icon': 'fab fa-instagram-square fa-2x', 
                        'link': 'https://www.instagram.com/'
                    }
                ]
            },
            {
                'name': 'Kevin Swanson', 
                'image': '/img/person4.jpg', 
                'function': 'Designer', 
                'feedback': 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus incidunt dolorum beatae, inventore porro quaerat.',
                'redes': [
                    {
                        'icon': 'fab fa-facebook-square fa-2x', 
                        'link': 'https://www.facebook.com'
                    },
                ]
            }
    ]"
    ></authors-component>

    {{-- Contact Section --}}
    <contact-component 
    id="contact"
    title="Get In Touch"
    text="Lorem ipsum dolor sit amet consectetur adipisicing."
    btn-text="Submit"
    :inputs="[
        {'type': 'text', 'icon': 'fas fa-user-alt fa-lg', 'placeholder': 'Name', 'value' : ''},
        {'type': 'email', 'icon': 'fas fa-envelope fa-lg', 'placeholder': 'E-mail', 'value' : ''},
        {'type': '', 'icon': 'fas fa-pencil-alt fa-lg', 'placeholder': 'Message', 'value' : ''}]">
    </contact-component>

    {{-- Footer --}}
    <footer-component id="footer"></footer-component>
@endsection