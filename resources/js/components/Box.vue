<template>
    <section id="boxes" class="py-5">
        <div class="container">
            <div class="row">
                <!-- Usar um array cuja a qualtidade seja multipla de 12 -->
                <template v-for="(value, index) in card">
                    <!-- Quando o final do array for atingido não será adicionando uma margin-botton -->
                    <div :class="'col-md-3 ' + (((card.length - 1) != index) ? 'mb-3' : '')">
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
        props: ['qtd', 'card']
    }
</script>