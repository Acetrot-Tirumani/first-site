<?php include('header.php'); ?>

<?php include('nav.php'); ?>

<!-- <h1>Main Section</h1> -->
<main class="content">
    <!-- carousel section -->
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active cursor-pointer"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1" class="cursor-pointer"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2" class="cursor-pointer"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3" class="cursor-pointer"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4" class="cursor-pointer"></li>
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
                    <a href="/contact" class="btn btn-outline-success g-work g-work-2">Contact</a>
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

    <div style="background-image: linear-gradient(to right, #163aeb, #007b00);  border-radius: 0px 0px 30px 30px;">
        <div class="container">
            <div class="row py-3 d-flex align-items-center">
                <div class="col-md-12 col-lg-12 text-center text-lg-center text-md-left mb-4 mb-md-0">
                    <h6 class="mb-0 text-white font-10">Skills</h6>
                </div>
            </div>
        </div>
    </div>

    <!-- skills section -->
    <div class="container mt-lg-70 mt-40 mb-40">
        <div class="row text-center justify-content-around">
            <div class="col-lg-4 mt-20 mb-20 border-bottom bt-large-0">
                <img data-src="\images\web-development.png" alt="" style="object-fit: contain;" class="rounded-circle border-dark round-border-blue lazyload" width="140" height="140">
                <h2 class="mt-10 mb-10 footer-header">Web Development</h2>
                <p>Web development is a way to make people aware of the services and/or products you are offering, understand why your products are relevant and even necessary for them to buy or use, and see which of your company's qualities set it apart from competitors.</p>
            </div>
            <div class="col-lg-4 mt-20 mb-20 border-bottom bt-large-0">
                <img data-src="\images\innovation.png" alt="" class="bd-placeholder-img rounded-circle border-dark round-border-blue lazyload" style="object-fit: contain;" style="object-fit: contain;" width="140" height="140">
                <h2 class="mt-10 mb-10 footer-header">Innovation</h2>
                <p>Successful innovation allows you to add value to your business so that you can increase your profits—if you don't innovate well, your business will plateau. Innovation helps you stay ahead of the competition.</p>
            </div>
            <div class="col-lg-4 mt-20 mb-20 border-bottom bt-large-0">
                <img data-src="\images\database.png" alt="" class="bd-placeholder-img rounded-circle border-dark round-border-blue lazyload" style="object-fit: contain;" width="140" height="140">
                <h2 class="mt-10 mb-10 footer-header">Database</h2>
                <p>Proper database management systems help increase organizational accessibility to data, which in turn helps the end users share the data quickly and effectively across the organization.</p>
            </div>
        </div>
        <div class="row text-center justify-content-around">
            <div class="col-lg-4 mt-20 mb-20 border-bottom bt-large-0">
                <img data-src="\images\api-integration.png" alt="" style="object-fit: contain;" class="rounded-circle border-dark round-border-blue lazyload" width="140" height="140">
                <h2 class="mt-10 mb-10 footer-header">API Integration</h2>
                <p>APIs are a great platform for quick business innovations as you can use them for creating solutions to your business problems. You can use API technology to create and develop innovative models for your business. Application economics emerged from API integration, which means applications can be developed quickly, better, and at a lower cost.</p>
            </div>
            <div class="col-lg-4 mt-20 mb-20 bt-large-0">
                <img data-src="\images\payment-gateway-1.png" alt="" class="bd-placeholder-img rounded-circle border-dark round-border-blue lazyload" style="object-fit: contain;" style="object-fit: contain;" width="140" height="140">
                <h2 class="mt-10 mb-10 footer-header">Payment Gateway</h2>
                <p>A payment gateway is an e-commerce service that authorizes credit card or direct payments processing for online businesses, bricks and clicks, or traditional brick and mortar sellers. It is essentially the virtual equivalent of the point-of-sale terminals at physical stores.</p>
            </div>
        </div>
    </div>
</main>
<!-- ✅ load Bootstrap JS ✅ -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
    $('.carousel').carousel({
        interval: 15000
    })
</script>
<?php include('footer.php'); ?>