<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <br>
    <br>
    <br>
    <br>
    <div class="container text-center">
        <img src="images/mapache_feli.png" class="rounded mx-auto d-block " width="240" class="my-2" alt="...">
        <br>
        <h2 class=" border-5-dark" class="d-inline-block">How you are feeling today</h2>
    </div>


    <div class="container ">
        <div class=" row row row-cols-6">
            <!-- mapache feli -->
            <div class="col">
                <div id="mapachito_feli">
                    <div class="container text-center">
                        <button type="button" class="btn outline" data-bs-toggle="modal" data-bs-target="#exampleModal"
                            data-bs-whatever="@mdo">
                            <div class="col">
                                <img src="images/mapache_feli.png" class="rounded mx-auto d-block " width="120"
                                    class="my-2" alt="...">
                            </div>
                        </button>

                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">we will talk about how do
                                            you feeling</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h2 class="fs-5">we will talk about how do you feeling</h2>
                                        <button type="button" class="btn btn-outline-info"
                                            data-bs-toggle="button">Playful</button>
                                        <button type="button" class="btn btn-outline-info"
                                            data-bs-toggle="button">Content</button>
                                        <button type="button" class="btn btn-outline-info"
                                            data-bs-toggle="button">Interested</button>
                                        <button type="button" class="btn btn-outline-info"
                                            data-bs-toggle="button">Pround</button>
                                        <button type="button" class="btn btn-outline-info"
                                            data-bs-toggle="button">Accepted</button>
                                        <button type="button" class="btn btn-outline-info"
                                            data-bs-toggle="button">Powerful</button>
                                        <button type="button" class="btn btn-outline-info"
                                            data-bs-toggle="button">Peaceful</button>
                                        <button type="button" class="btn btn-outline-info"
                                            data-bs-toggle="button">Trusting</button>
                                        <button type="button" class="btn btn-outline-info"
                                            data-bs-toggle="button">Optimistic</button>
                                        <hr>
                                    </div>
                                    <div class="mb-3">
                                        <h2 class="fs-5">here you can expresive how do you feeling</h2>
                                        <textarea class="form-control" id="message-text"></textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancelar</button>
                                        <button type="button" class="btn btn-primary">Aceptar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mapache asustadito -->
            <div class="col">
                <div id="mapache_asustadito">
                    <div class="container text-center">
                        <button type="button" class=" btn outline" data-bs-toggle="modal"
                            data-bs-target="#exampleModalAs" data-bs-whatever="@mdo">
                            <div class="col 1">
                                <img src="images/mapache_miedo.PNG" class="rounded mx-auto d-block " width="120"
                                    class="my-2" alt="...">
                            </div>
                        </button>

                        <div class="modal fade" id="exampleModalAs" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-6" id="exampleModalLabel2">we will talk about how do
                                            you feeling</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h2 class="fs-6">we will talk about how do you feeling</h2>
                                        <button type="button" class="btn btn-outline-info"
                                            data-bs-toggle="button">Scared</button>
                                        <button type="button" class="btn btn-outline-info"
                                            data-bs-toggle="button">Anxious</button>
                                        <button type="button" class="btn btn-outline-info"
                                            data-bs-toggle="button">Insecure</button>
                                        <button type="button" class="btn btn-outline-info"
                                            data-bs-toggle="button">Weak</button>
                                        <button type="button" class="btn btn-outline-info"
                                            data-bs-toggle="button">Rejected</button>
                                        <button type="button" class="btn btn-outline-info"
                                            data-bs-toggle="button">Threatened</button>

                                        <hr>
                                    </div>
                                    <div class="mb-3">
                                        <h2 class="fs-5">here you can expresive how do you feeling</h2>
                                        <textarea class="form-control" id="message-text"></textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancelar</button>
                                        <button type="button" class="btn btn-primary">Aceptar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- mapache tite -->
            <div class="col">
                <div id="mapache_tite">
                    <div class="container text-center">
                        <button type="button" class=" btn outline" data-bs-toggle="modal"
                            data-bs-target="#exampleModalTr" data-bs-whatever="@mdo">
                            <div class="col 1">
                                <img src="images/mapache_tite.png" class="rounded mx-auto d-block " width="120"
                                    class="my-2" alt="...">
                            </div>
                        </button>

                        <div class="modal fade" id="exampleModalTr" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-6" id="exampleModalLabel2">we will talk about how do
                                            you feeling</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h2 class="fs-6">we will talk about how do you feeling</h2>
                                        <button type="button" class="btn btn-outline-info"
                                            data-bs-toggle="button">Lonely</button>
                                        <button type="button" class="btn btn-outline-info"
                                            data-bs-toggle="button">Vulnerable</button>
                                        <button type="button" class="btn btn-outline-info"
                                            data-bs-toggle="button">Despair</button>
                                        <button type="button" class="btn btn-outline-info"
                                            data-bs-toggle="button">Guilty</button>
                                        <button type="button" class="btn btn-outline-info"
                                            data-bs-toggle="button">Depressed</button>
                                        <button type="button" class="btn btn-outline-info"
                                            data-bs-toggle="button">Hurt</button>
                                        <hr>
                                    </div>
                                    <div class="mb-3"> <!--holaaa-->
                                        <h2 class="fs-5">here you can expresive how do you feeling</h2>
                                        <textarea class="form-control" id="message-text"></textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancelar</button>
                                        <button type="button" class="btn btn-primary">Aceptar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mapache nojao -->
            <div class="col">
                <div id="mapache_nojao">
                    <div class="container text-center">
                        <button type="button" class="btn outline" data-bs-toggle="modal"
                            data-bs-target="#exampleModalEn" data-bs-whatever="@mdo">
                            <div class="col 1">
                                <img src="images/mapache_enojado.PNG" class="rounded mx-auto d-block " width="120"
                                    class="my-2" alt="...">
                            </div>
                        </button>

                        <div class="modal fade" id="exampleModalEn" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-6" id="exampleModalLabel2">we will talk about how do
                                            you feeling</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h2 class="fs-6">here you can chose the branch of your emotions</h2>
                                        <button type="button" class="btn btn-outline-info" 
                                        data-bs-toggle="button">Let down</button>
                                        <button type="button" class="btn btn-outline-info" 
                                        data-bs-toggle="button">Humiliated</button>
                                        <button type="button" class="btn btn-outline-info" 
                                        data-bs-toggle="button">Bitter</button>
                                        <button type="button" class="btn btn-outline-info" 
                                        data-bs-toggle="button">Mad</button>
                                        <button type="button" class="btn btn-outline-info" 
                                        data-bs-toggle="button">Aggressive</button>
                                        <button type="button" class="btn btn-outline-info" 
                                        data-bs-toggle="button">Frustrated</button>
                                        <button type="button" class="btn btn-outline-info" 
                                        data-bs-toggle="button">Distant</button>
                                        <button type="button" class="btn btn-outline-info" 
                                        data-bs-toggle="button">Critical</button>
                                        <hr>
                                    </div>
                                    <div class="mb-3">
                                        <h2 class="fs-5">here you can expresive how do you feeling</h2>
                                        <textarea class="form-control" id="message-text"></textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancelar</button>
                                        <button type="button" class="btn btn-primary">Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- mapache con asquito -->
            <div class="col">
                <div id="mapache_desagrado">
                    <div class="container text-center">
                        <button type="button" class=" btn outline" data-bs-toggle="modal"
                            data-bs-target="#exampleModalDe" data-bs-whatever="@mdo">
                            <div class="col 1">
                                <img src="images/mapache_desagrado.PNG" class="rounded mx-auto d-block " width="120"
                                    class="my-2" alt="...">
                            </div>
                        </button>

                        <div class="modal fade" id="exampleModalDe" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-6" id="exampleModalLabel2">we will talk about how do
                                            you feeling</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h2 class="fs-6">we will talk about how do you feeling</h2>
                                        <button type="button" class="btn btn-outline-info" 
                                        data-bs-toggle="button">Disapproving</button>
                                        <button type="button" class="btn btn-outline-info" 
                                        data-bs-toggle="button">Disappointed</button>
                                        <button type="button" class="btn btn-outline-info" 
                                        data-bs-toggle="button">Awful</button>
                                        <button type="button" class="btn btn-outline-info" 
                                        data-bs-toggle="button">Repelled</button>
                                        <hr>
                                    </div>
                                    <div class="mb-3">
                                        <h2 class="fs-5">here you can expresive how do you feeling</h2>
                                        <textarea class="form-control" id="message-text"></textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancelar</button>
                                        <button type="button" class="btn btn-primary">Aceptar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- mapache sorprendido -->
            <div class="col">
                <div id="mapache_sorpresa">
                    <div class="container text-center">
                        <button type="button" class="btn outline" data-bs-toggle="modal"
                            data-bs-target="#exampleModalSo" data-bs-whatever="@mdo">
                            <div class="col 1">
                                <img src="images/mapache_sorprendido.PNG" class="rounded mx-auto d-block " class="mt-5"
                                    width="120" class="my-2" alt="...">
                            </div>
                        </button>

                        <div class="modal fade" id="exampleModalSo" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-6" id="exampleModalLabel2">we will talk about how do
                                            you feeling</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h2 class="fs-6">we will talk about how do you feeling</h2>
                                        <button type="button" class="btn btn-outline-info" 
                                        data-bs-toggle="button">Startled</button>
                                        <button type="button" class="btn btn-outline-info" 
                                        data-bs-toggle="button">Confused</button>
                                        <button type="button" class="btn btn-outline-info" 
                                        data-bs-toggle="button">Amazed</button>
                                        <button type="button" class="btn btn-outline-info" 
                                        data-bs-toggle="button">Excited</button>
                                        <hr>
                                    </div>
                                    <div class="mb-3">
                                        <h2 class="fs-5">here you can expresive how do you feeling</h2>
                                        <textarea class="form-control" id="message-text"></textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancelar</button>
                                        <button type="button" class="btn btn-primary">Aceptar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main style=" margin-left: 850px;">
        <!--imagenes motivadoras para tener un dia bn bonito ¿
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active center">
                    <img src="images/perrito wonito.jpg" class="d-block" alt="..." width="295" height="200">
                </div>
                <div class="carousel-item">
                    <img src="images/perrito2.jpg" class="d-block " alt="..." width="295" height="200">
                </div>
                <div class="carousel-item">
                    <img src="images/perritos-motivadores.png" class="d-block " alt="..." width="295" height="200">
                </div>
                <div class="carousel-item">
                    <img src="images/perritos-motivadores2.png" class="d-block " alt="..." width="295" height="200">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div> -->
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
<script src="js/boton.js"></script>
<script src="js/menu.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>

</html>