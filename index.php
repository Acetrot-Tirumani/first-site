<?php include('header.php'); ?>

<?php include('nav.php'); ?>

<!-- <h1>Main Section</h1> -->
<main class="content">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade " data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/slider-1.jpg" alt="First slide">
                <div class="carousel-caption slider-text-1">
                    <p class="g-name">Hi, TIRUMANI HERE</p>
                    <p class="g-work">-Backend Developer</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/slider-2.jpg" alt="Second slide">
                <div class="carousel-caption slider-text-2">
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/slider-3.jpg" alt="Third slide">
                <div class="carousel-caption slider-text-3">
                    <h5>Contact Now</h5>
                    <a href="contact.php" class="btn btn-outline-success">Contact</a>
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