<template>
    <!-- id: ID da section -->
    <!-- title: Título principal da section -->
    <!-- text: Texto descritivo do título principal -->
    <!-- authors: Objeto com propriadades do author. name(Nome do autor),
    imagem(Foto do autor), function(Função do autor), feedback(Descrição do autor), redes(Objeto com atributos referentes aos icones de redes socias e o link de referencia) -->
    <!-- authors: [
            {
                'name': '', 
                'image': '', 
                'function': '', 
                'feedback': '', 
                'redes': [
                    {
                        'icon': '', 
                        'link': ''
                    }
                    

                ]
            } 
    -->
    <section :id="id" class="py-5">
        <div class="container">
            <!-- Título -->
            <div class="row mb-5">
                <div class="col-10 offset-1 col-md-6 offset-md-3 text-center border-bottom">
                    <h2 class="text-primary">{{title}}</h2>
                    <p class="lead">{{text}}</p>
                </div>
            </div>

            <!-- Autores -->
            <div class="row">
                <template v-for="author in authors">
                    <div :class="'col-lg-' + (12/(authors.length)) + ' col-md-6'">
                        <div class="card">
                            <div class="card-body text-center">
                                <img class="img-fluid rounded-circle w-50 mb-3" :src="author.image" alt="">
                                <h3 class="card-title">{{author.name}}</h3>
                                <h5 class="d-block text-muted">{{author.function}}</h5>
                                <p class="card-text">{{author.feedback}}</p>
                                <div class="d-flex justify-content-around mt-5">
                                    <template v-for="rede in author.redes">
                                        <!-- Redes sociais -->
                                        <a :href="rede.link" target="_blanck">
                                            <i :class="rede.icon"></i>
                                        </a>
                                    </template>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        props: ['authors', 'id' ,'title', 'text']
    }
</script>
