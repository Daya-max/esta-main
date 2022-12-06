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
        <h2 class=" border-5-dark" class="d-inline-block">How do you feel today?</h2>
    </div>


    <div class="container ">
        <div class=" row row row-cols-6">
            <!-- mapache feli -->
            <div class="col">
                <div id="mapachito_feli">
                    <div class="container text-center">

                        <button type="button" class="btn outline" data-bs-toggle="modal" data-bs-target="#exampleModal"
                            data-bs-whatever="@mdo" name="feli">
                            <div class="col">
                                <img src="images/mapache_feli.png" class="rounded mx-auto d-block " width="120"
                                    class="my-2" alt="...">
                            </div>
                        </button>
                        <form action="php/mapaches.php" method="post">
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">we will talk about how
                                                do
                                                you feeling</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">


                                            <h2 class="fs-5">we will talk about how do you feeling</h2>
                                            <select name="feli-select" id="" class="btn btn-outline-info">
                                                <option value="0"></option>
                                                <option value="Playful">Playful</option>
                                                <option value="Content">Content</option>
                                                <option value="Interested">Interested</option>
                                                <option value="Pround">Pround</option>
                                                <option value="Accepted">Accepted</option>
                                                <option value="Powerful">Powerful</option>
                                                <option value="Peaceful">Peaceful</option>
                                                <option value="Trusting">Trusting</option>
                                                <option value="Optimistic">Optimistic</option>

                                            </select>
                                            <hr>
                                        </div>
                                        <div class="mb-3">
                                            <h2 class="fs-5">here you can expresive how do you feeling</h2>
                                            <input type="text" class="form-control" id="message-text" name="text_feli">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-primary"
                                                name="feli-btn">Aceptar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            </form>
            <!-- mapache asustadito -->
            <div class="col">
                <div id="mapache_asustadito">
                    <div class="container text-center">
                        <button type="button" class=" btn outline" data-bs-toggle="modal"
                            data-bs-target="#exampleModalAs" data-bs-whatever="@mdo" name="scared">
                            <div class="col 1">
                                <img src="images/mapache_miedo.PNG" class="rounded mx-auto d-block " width="120"
                                    class="my-2" alt="...">
                            </div>
                        </button>
                        <form action="php/mapaches.php" method="post">
                            <div class="modal fade" id="exampleModalAs" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-6" id="exampleModalLabel2">we will talk about how
                                                do
                                                you feeling</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h2 class="fs-6">we will talk about how do you feeling</h2>
                                            <select name="scared-select" id="" class="btn btn-outline-info">
                                                <option value="0"></option>
                                                <option value="Scared">Scared</option>
                                                <option value="Anxious">Anxious</option>
                                                <option value="Insecure">Insecure</option>
                                                <option value="Weak">Weak</option>
                                                <option value="Rejected">Rejected</option>
                                                <option value="Threatened">Threatened</option>

                                            </select>

                                            <hr>
                                        </div>
                                        <div class="mb-3">
                                            <h2 class="fs-5">here you can expresive how do you feeling</h2>
                                            <input class="form-control" id="message-text" name="text_scared"></textarea>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-primary" name="scared-btn">Aceptar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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
                        <form action="php/mapaches.php" method="post">
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
                                        <select name="tite-select" id="">
                                                <option value="0"></option>
                                                <option value="Lonely">Lonely</option>
                                                <option value="Vulnerable">Vulnerable</option>
                                                <option value="Despair">Despair</option>
                                                <option value="Guilty">Guilty</option>
                                                <option value="Depressed">Depressed</option>
                                                <option value="Hurt">Hurt</option>
                                        </select>
                                        <hr>
                                    </div>
                                    <div class="mb-3">
                                        <!--holaaa-->
                                        <h2 class="fs-5">here you can expresive how do you feeling</h2>
                                        <input type="text" class="form-control" id="message-text" name="text_tite"></textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-primary" name="tite-btn">Aceptar</button>
                                    </div>
                                    </form>
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
                        <form action="php/mapaches.php" method="POST">
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
                                        <select name="nojao-select" id="">
                                                <option value="0"></option>
                                                <option value="Humiliated">Humiliated</option>
                                                <option value="Bitter">Bitter</option>
                                                <option value="Mad">Mad</option>
                                                <option value="Aggressive">Aggressive</option>
                                                <option value="Frustrated">Frustrated</option>
                                                <option value="Distant">Distant</option>
                                                <option value="Critical">Critical</option>
                                        </select>
                                        <hr>
                                    </div>
                                    <div class="mb-3">
                                        <h2 class="fs-5">here you can expresive how do you feeling</h2>
                                        <input type="text" name="text_nojao" class="form-control" id="message-text">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-primary" name="nojao-btn">Enviar</button>
                                        </form>
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
                        <form action="php/mapaches.php" method="POST">
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
                                        <select name="desagrado-select" id="">
                                                <option value="0"></option>
                                                <option value="Disapproving">Disapproving</option>
                                                <option value="Disappointed">Disappointed</option>
                                                <option value="Awful">Awful</option>
                                                <option value="Repelled">Repelled</option>      
                                        </select>
                                        <hr>
                                    </div>
                                    <div class="mb-3">
                                        <h2 class="fs-5">here you can expresive how do you feeling</h2>
                                        <input class="form-control" name="text_desagrado" id="message-text">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-primary" name="desagrado-btn">Aceptar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>
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
                        <form action="php/mapaches.php" method="POST">
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
                                        <select name="sorpresa-select" id="">
                                                <option value="0"></option>
                                                <option value="Startled">Startled</option>
                                                <option value="Confused">Confused</option>
                                                <option value="Amazed">Amazed</option>
                                                <option value="Excited">Excited</option>      
                                        </select>
                                        
                                        <hr>
                                    </div>
                                    <div class="mb-3">
                                        <h2 class="fs-5">here you can expresive how do you feeling</h2>
                                        <input name="text_sorpresa" class="form-control" id="message-text">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancelar</button>
                                        <button type="submit" name="sorpresa-btn" class="btn btn-primary">Aceptar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
   
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