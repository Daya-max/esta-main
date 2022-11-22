<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SafeMe</title>
    <link rel="icon" href="../images/1.png">
    <link rel="stylesheet" href="../css/bitacora.css">
    <link rel="stylesheet" href="../css/styles.css">


    <script src="https://kit.fontawesome.com/92927bfbd1.js" crossorigin="anonymous"></script>

</head>
<div class="menu__side" id="menu_side">

    <div class="name__page">
        <i class="fa-solid fa-seedling"></i>
        <h4> SafeMe</h4>
    </div>

    <div class="options__menu">

        <a href="../Amenu.php" title="Home">
            <div class="option">
                <i class="fa-solid fa-house"></i>
                <h4>Home</h4>
            </div>
        </a>

        <a href="bitacora.php" class="selected" title="Log">
            <div class="option">
                <i class="fa-regular fa-calendar-days"></i>
                <h4>Log</h4>
            </div>
        </a>

        <a href="Clinea de ayuda.php" title="Helpline">
            <div class="option">
                <i class="fa-solid fa-hand-holding-medical"></i>
                <h4>Helpline</h4>
            </div>
        </a>

        <a href="Acrisis.php" title="Crisis">
            <div class="option">
                <i class="fa-solid fa-heart-circle-exclamation"></i>
                <h4>Crisis</h4>
            </div>
        </a>
        <a href="Bperfil.php" title="Profile">
            <div class="option">
                <i class="fa-solid fa-user-gear"></i>
                <h4>Profile</h4>
            </div>
        </a>

        <a href="Bconfiguracion.php" title="Configuration">
            <div class="option">
                <i class="fa-solid fa-gear"></i>
                <h4>Configuration</h4>
            </div>
        </a>
        <br>
        <br>
        <br>
        <br>
        <a href="logout.php">
            <div class="option">
                <i class="fa-solid fa-power-off"></i>
            </div>
        </a>
    </div>

</div>


<script src="../js/boton.js"></script>
<script src="../js/menu.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
</body>


<main>
    <br>
    <br>
    <h1 class="title">FEEDBACK</h1>

    <div class="calendar">
        <div class="calendar__info">
            <div class="calendar__prev" id="prev-month">&#9664;</div>
            <div class="calendar__month" id="month"></div>
            <div class="calendar__year" id="year"></div>
            <div class="calendar__next" id="next-month">&#9654;</div>
        </div>

        <div class="calendar__week">
            <div class="calendar__day calendar__item">Mon</div>
            <div class="calendar__day calendar__item">Tue</div>
            <div class="calendar__day calendar__item">Wed</div>
            <div class="calendar__day calendar__item">Thu</div>
            <div class="calendar__day calendar__item">Fri</div>
            <div class="calendar__day calendar__item">Sat</div>
            <div class="calendar__day calendar__item">Sun</div>
        </div>

        <div class="calendar__dates" id="dates"></div>
    </div>


</main>
<script src="../js/scripts.js"></script>
<script src="../js/menu.js"></script>
</body>