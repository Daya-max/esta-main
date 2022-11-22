<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SafeMe</title>
    <link rel="icon" href="../images/1.png">
    <link rel="stylesheet" href="css/bitacora.css">
    <link rel="stylesheet" href="css/styles.css">

    <script src="https://kit.fontawesome.com/92927bfbd1.js" crossorigin="anonymous"></script>
</head>

<body id="body">
    <header>
        <div class="icon__menu">
            <i class="fa-solid fa-bars" id="btn_open"></i>
        </div>
        <div class="container b-block center $zindex-fixed:-1030;">
            <button type="button" class="btn btn-outline-danger btn-sm" id="liveToastBtn">emergency help</button>
        </div>
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <img width="20px" src="../images/1.png" class="rounded me-2" alt="...">
                    <strong class="me-auto">SafeMe</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    Tranquil@ <br>
                    necesitas ayuda?<a href="#" class="link-info">01800 911 2000</a> llama para que te aude un
                    especialista
                </div>
            </div>
        </div>
    </header>

    <div class="menu__side" id="menu_side">

        <div class="name__page">
            <i class="fa-solid fa-seedling"></i>
            <h4> SafeMe</h4>
        </div>

        <div class="options__menu">

            <a href="Amenu.php" class="selected" title="Home">
                <div class="option">
                    <i class="fa-solid fa-house"></i>
                    <h4>Home</h4>
                </div>
            </a>

            <a href="php/bitacora.php" title="Log">
                <div class="option">
                    <i class="fa-regular fa-calendar-days"></i>
                    <h4>Log</h4>
                </div>
            </a>

            <a href="php/Clinea de ayuda.php" title="Helpline">
                <div class="option">
                    <i class="fa-solid fa-hand-holding-medical"></i>
                    <h4>Helpline</h4>
                </div>
            </a>

            <a href="php/Acrisis.php" title="Crisis">
                <div class="option">
                    <i class="fa-solid fa-heart-circle-exclamation"></i>
                    <h4>Crisis</h4>
                </div>
            </a>
            <a href="php/Bperfil.php" title="Profile">
                <div class="option">
                    <i class="fa-solid fa-user-gear"></i>
                    <h4>Profile</h4>
                </div>
            </a>

            <a href="php/Bconfiguracion.php" title="Configuration">
                <div class="option">
                    <i class="fa-solid fa-gear"></i>
                    <h4>Configuration</h4>
                </div>
            </a>
            <br>
            <br>
            <br>
            <br>
            <a href="php/salir.php">
                <div class="option">
                    <i class="fa-solid fa-power-off"></i>
                </div>
            </a>
        </div>

    </div>


    <script src="js/boton.js"></script>
    <script src="js/menu.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>