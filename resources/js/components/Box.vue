<template>
    <!-- card: Objeto com propriedades do card. title(Título do card), 
    text(Texto explicativo do card) -->
    <section :id="id" class="py-5">
        <div class="container">
            <div class="row">
                <!-- Usar um array cuja a qualtidade seja multipla de 12 -->
                <template v-for="(value, index) in card">
                    <!-- Quando o final do array for atingido não será adicionando o margin-botton -->
                    <!-- O layout irá se adaptar de acordo com a quantidade de elementos do array -->
                    <div :class="'col-md-' + (12/(card.length)) + (((card.length - 1) != index) ? ' mb-3' : '')">
                        <div class="card border border-primary text-center">
                            <!-- Variação das cores dos cards -->
                            <div :class="'card-body' + ((index % 2) ? ' text-primary' : ' bg-primary text-white')">
                                <h3 class="text-capitalize">{{value.title}}</h3>
                                <p>{{value.text}}</p>
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
        props: ['card', 'id']
    }
</script>