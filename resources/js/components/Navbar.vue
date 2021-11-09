<template>
    <!-- imagem: Arquivo de imagem da logo -->
    <!-- link: Link de referencia da logo -->
    <!-- title: Nome da marca -->
    <!-- id: ID da barra de navegação  -->
    <!-- item: Um objeto que será precorrido para exibir os item da bara de navegação. Apresenta três propriedades, item(Texto de referencia do botão), ref(ID de referencia de uma section) e link(Link de referencia para um página)
     -->
    <nav id="id" class="navbar navbar-expand-md navbar-light bg-light py-4 fixed-top">
        <div class="container">
            <a class="navbar-brand" :href="link">
                <img :src="image" alt="Logo" width="50">
                <h3 class="d-inline align-middle text-capitalize">{{title}}</h3>
            </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item" v-for="item, key in itens" :key="key">
                        <a class="nav-link" :href="item.link == '' ? item.ref : item.link">{{item.text | upperFirstLetter}}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
    export default {
        props: ['itens', 'image', 'id', 'title', 'link']
    }
</script>