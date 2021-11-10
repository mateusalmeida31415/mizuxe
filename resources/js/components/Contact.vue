<template>
    <!-- id: ID da section -->
    <!-- title: Título principal da section -->
    <!-- text: Texto de descrição do título principal -->
    <!-- inputs: Objeto com atribudos refente aos inputs. type(Tipo do input),
    icon(Classe do fontawesome que refencia um icone), placeholder(Texto de descrição do campo) e value(Valor preenchido pelos usuários) -->
    <!-- OBS: Caso o inputs.type == '', o textarea será renderizado na página -->
    <!-- btnText: Texto do botão de envio dos dados -->
    <section :id="id" class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col">
                    <!-- Título principal -->
                    <h4>{{title}}</h4>
                    <!-- Descrição do título principal -->
                    <p>{{text}}</p>
                    <!-- Input Name -->
                    <template v-for="(input, index) in inputs">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <!-- Icone exibido do lado esquerdo do input -->
                                    <span class="input-group-text">
                                        <i :class="input.icon"></i>
                                    </span>
                                </div>
                                <!-- Caso o atributo type do objeto não esteja vazio,
                                o input será renderizado -->
                                <input class="form-control form-control-lg" :type="input.type" :placeholder="input.placeholder" v-model="input.value" v-if="input.type != ''">
                                <!-- Caso o atributo type do objeto esteja vazio,
                                o elemento textarea será renderizado -->
                                <textarea class="form-control form-control-lg" :placeholder="input.placeholder" rows="5" v-model="input.value" v-else></textarea>
                            </div>
                        </div>
                    </template>
                    <!-- Botão de envio das informações -->
                    <button class="btn btn-primary btn-block btn-lg" @click="show()">{{btnText}}</button>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        props: ['id', 'title', 'text', 'inputs', 'btnText'], 
        methods: {
            show(){
                this.inputs.forEach(element => {
                    console.log(element.value)
                });
            }
        }
    }
</script>