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
<?php require('style_log.php') ?>
</body>
<?php require('style_log.php') ?>
<main>
    <br>
    <br>
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