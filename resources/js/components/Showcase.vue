<template>
    <!-- id: ID da section  -->
    <!-- title: Título principal da section-->
    <!-- text: Descrição do título -->
    <!-- link: Link de referencia do botão -->
    <!-- imagem: Imagem exibida na seção -->
    <!-- alt: Descrição da imagem -->
    <section :id="id">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-center d-flex flex-column justify-content-center align-item-center mt-5 pt-5 mt-lg-0 pt-lg-0">
                        <!-- Title -->
                        <h1 class="display-3">{{title}}</h1>
                        <!-- Text description -->
                        <p class="lead">{{text}}</p>
                        <!-- Know more Buttom -->
                        <a :href="link" class="btn btn-outline-secondary btn-lg text-white align-self-center">
                            <i class="fas fa-arrow-right"></i> Read More
                        </a>
                    </div>
                    <!-- Exemplo imagem-->
                    <div class="col-lg-6 d-none d-lg-block">
                        <img :src="image" :alt="alt" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        props: ['id' ,'title', 'text', 'link', 'image', 'alt']
    }
</script>