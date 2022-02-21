<?php include('header.php'); ?>

<?php include('nav.php'); ?>

<!-- main section -->
<main class="content">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb" style="background-image: linear-gradient(to right, #145bdd, #0ab90acc); border-radius: 0px 0px 30px 30px;">
            <li class="breadcrumb-item h1 text-white">About</li>
        </ol>
    </nav>

    <div class="container mt-60 mb-40">
        <div class="row featurette align-items-center">
            <div class="col-md-5 mb-20 order-md-2">
                <img data-src="images/programmer-1.png" alt="" height="400" class="img-fluid mx-auto lazyload">
            </div>
            <div class="col-md-7 mb-20 order-md-1">
                <h2 class="featurette-heading"><span class="text-muted">Hi, myself </span>
                    <span class="footer-header font-15">TIRUMANI</span> <span class="text-muted">- a Backend Developer.</span>
                </h2>
                <p class="lead">An energetic, ambitious person who has developed a mature and responsible approach to any task that I undertake or situation that I am presented with. I am excellent in working with others to achieve a certain objective on time and with excellence.</p>
            </div>
        </div>
        <!-- <hr class="featurette-divider"> -->
    </div>

    <div style="background-image: linear-gradient(to right, #163aeb, #007b00);  border-radius: 0px 0px 30px 30px;">
        <div class="container">
            <div class="row py-3 d-flex align-items-center">
                <div class="col-md-12 col-lg-12 text-center text-lg-center text-md-left mb-4 mb-md-0">
                    <h6 class="mb-0 text-white font-10">Programming Knowledge</h6>
                </div>
            </div>
        </div>
    </div>
    <section class="campus">
        <div class="row custom-flex-column">
            <div class="campus-col">
                <img data-src="images/html.png" class="lazyload" alt="Interstellar">
                <div class="layer">
                    <h3>HTML</h3>
                </div>
            </div>
            <div class="campus-col">
                <img data-src="images/css.png" class="lazyload" alt="Interstellar">
                <div class="layer">
                    <h3>Basic CSS, Bootstrap</h3>
                </div>
            </div>
            <div class="campus-col">
                <img data-src="images/java-script.png" class="lazyload" alt="Interstellar">
                <div class="layer">
                    <h3>Ajax, jQuery, Axios</h3>
                </div>
            </div>
            <div class="campus-col">
                <img data-src="images/php.png" class="lazyload" alt="Interstellar">
                <div class="layer">
                    <h3>Core Php, Laravel</h3>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include('footer.php'); ?>