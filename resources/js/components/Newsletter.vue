<template>
    <section id="newsletter" class="py-5 bg-dark">
        <div class="container">
            <div class="row">

                <template v-for="input in inputs">
                    <div class="col-md mb-3 mb-lg-0">
                        <input :type="input.type" class="form-control form-control-lg" :placeholder="input.placeholder" v-model="input.value">
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <input type="email" class="form-control form-control-lg" id="email" placeholder="Seu e-mail">
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block btn-lg">Cadastrar</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {}
</script>
