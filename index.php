<?php include('header.php'); ?>

<?php include('nav.php'); ?>

<!-- <h1>Main Section</h1> -->
<main class="content">

    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/slider-1.png" alt="First slide">
                <div class="carousel-caption slider-text-1">
                    <p class="g-name font-bold">Hi, TIRUMANI HERE</p>
                    <p class="g-work">-Backend Developer</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/slider-2.png" alt="Second slide">
                <div class="carousel-caption slider-text-2">
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/back-end-2.png" alt="Second slide">
                <div class="carousel-caption slider-text-2">
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/back-end-4.png" alt="Second slide">
                <div class="carousel-caption slider-text-2">
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/contact-slider.png" alt="Third slide">
                <div class="carousel-caption carousel-caption-2 slider-text-3">
                    <p class="g-name-2 font-bold">Contact Now</p>
                    <a href="contact.php" class="btn btn-outline-success g-work g-work-2">Contact</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div>
        <h5>Main Content</h5>
    </div>
</main>
<!-- ✅ load Bootstrap JS ✅ -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
    $('.carousel').carousel({
        interval: 200000000
    })
</script>
<?php include('footer.php'); ?>