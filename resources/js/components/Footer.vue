<template>
    <!-- id: ID da footer -->
    <footer :id="id" class="bg-primary py-2">
        <div class="container">
            <div class="row">
                <div class="col-6 offset-3 text-white text-center">
                    <p class="lead mb-0">Copyright &copy; {{ '' | getThisYear }}</p>
                </div>
            </div>
        </div>
    </footer>
</template>

<script>
    export default {
        props: ['id']
    }
</script>