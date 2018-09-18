<?php
include 'header.php';
?>
    <div id="demo" class="carousel slide" data-ride="carousel">

        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="paveiksliukai/111.jpg" alt="Paveiksliukas">
            </div>
            <div class="carousel-item">
                <img src="paveiksliukai/222.jpg" alt="Paveiksliukas">
            </div>
            <div class="carousel-item">
                <img src="paveiksliukai/333.jpg" alt="Paveiksliukas">
            </div>
        </div>

        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>
<?php
include 'footer.php';
?>