<template>
    <section :id="id" class="bg-light py-5">
        <div class="container text-center">
            <div class="row">
                <div class="col-6 offset-3 py-3 border-bottom">
                    <h2 class="text-primary">Why This Book?</h2>
                    <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae, quasi.</p>
                </div>
            </div>

            <!-- Accordion -->
            <div class="accordion mt-5" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <div class="btn btn-block btn-lg text-center" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <i class="fas fa-arrow-alt-circle-down text-primary mr-2"></i>Get Inspired 
                            </div>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime dicta neque ducimus nostrum officiis exercitationem, ratione aliquid provident possimus aperiam rem perspiciatis, adipisci laboriosam necessitatibus officia ut porro odio voluptas dolore aut inventore eveniet labore? Et veritatis provident iure, alias eveniet sit ex eaque nesciunt repudiandae dolores eius ducimus fuga!
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <div class="btn btn-block btn-lg text-center collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <i class="fas fa-arrow-alt-circle-down text-primary mr-2"></i>Gain The Knowledge 
                            </div>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt magnam ullam voluptates voluptate illum consequatur minus pariatur dolorum. Vitae saepe dicta harum aperiam nihil quasi ipsum ipsam asperiores ratione perferendis, labore cupiditate vel incidunt voluptate necessitatibus doloremque porro magni amet consectetur facere, at voluptas quo! Alias laborum possimus facilis unde?
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <div class="btn btn-block btn-lg text-center collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <i class="fas fa-arrow-alt-circle-down text-primary mr-2"></i>Open Your Mind
                            </div>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima praesentium ratione ex dolorem nihil doloremque laboriosam laudantium dicta totam mollitia dolorum aliquam delectus blanditiis neque, ea aperiam repellat accusamus eius atque alias eum nobis culpa voluptatibus. Mollitia, blanditiis, fugiat aut debitis quisquam nobis harum perspiciatis numquam aliquam eaque ut omnis!
                        </div>
                    </div>
                </div>
            </div>   
        </div>
    </section>
</template>

<script>
    export default {
        props: ['id']
    }
</script>