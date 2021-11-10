<template>
    <!-- id: ID da section -->
    <!-- title: Título principal da section -->
    <!-- text: Texto explicativo do título -->
    <!-- Accordion: Objeto com propriedades do accordion. title(Título do botão) e text(Texto explicativo) -->
    <section :id="id" class="bg-light py-5">
        <div class="container text-center">
            <div class="row">
                <div class="col-6 offset-3 py-3 border-bottom">
                    <!-- Título principal da section -->
                    <h2 class="text-primary">{{title}}</h2>
                    <!-- Descrição do título principal -->
                    <p class="lead">{{text}}</p>
                </div>
            </div>

            <!-- Accordion -->
            <div class="accordion mt-5" id="accordionWhy">
                <template v-for="(item, index) in accordion">
                    <div class="card">
                        <div class="card-header" :id="'heading-'+index">
                            <!-- Títilo do accordion -->
                            <h5 class="mb-0">
                                <div class="btn btn-block btn-lg text-center" data-toggle="collapse" :data-target="'#collapse-'+index" aria-expanded="true" :aria-controls="'collapse-'+index">
                                <i class="fas fa-arrow-alt-circle-down text-primary mr-2"></i>{{item.title}} 
                                </div>
                            </h5>
                        </div>

                        <div :id="'collapse-' + index" class="collapse" :aria-labelledby="'heading-'+index" data-parent="#accordionWhy">
                            <!-- Texto do accordion -->
                            <div class="card-body">
                                {{item.text}}
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
        props: ['id', 'title', 'text', 'accordion']
    }
</script>