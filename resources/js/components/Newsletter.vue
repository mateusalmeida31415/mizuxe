<template>
    <!-- id: ID da section -->
    <!-- inputs: Um objeto que contem atributos informações dos inputs.  
    type(Tipo do formulário), placeholder(Descrição do campo para os usuários finais) e value(atributo relacionando com valor contido no campo) -->
    <!-- btnText: Texto do botão -->
    <section :id="id" class="py-5 bg-dark">
        <div class="container">
            <div class="row">
                <template v-for="input in inputs">
                    <div class="col-md">
                        <input :type="input.type" class="form-control form-control-lg" :placeholder="input.placeholder" v-model="input.value">
                    </div>
                </template>
            
                <div class="col-md">
                    <button class="btn btn-primary btn-block btn-lg" @click="show()">{{btnText}}</button>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        props: ['id', 'inputs', 'btnText'], 
        methods: {
            show(){
                this.inputs.forEach(element => {
                    console.log(element.value)
                });
            }
        }

    }
</script>
