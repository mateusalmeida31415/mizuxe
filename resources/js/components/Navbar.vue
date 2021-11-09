<template>
    <nav id="id" class="navbar navbar-expand-sm navbar-light bg-light py-4 fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img :src="image" alt="Logo" width="50">
                <h3 class="d-inline align-middle">Mizuxe</h3>
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
        props: ['itens', 'image', 'id']
    }
</script>