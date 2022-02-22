<?php include('header.php') ?>
<?php include('nav.php') ?>

<main class="content">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb" style="background-image: linear-gradient(to right, #145bdd, #0ab90acc); border-radius: 0px 0px 30px 30px;">
            <li class="breadcrumb-item h1 text-white">Contact</li>
        </ol>
    </nav>

    <div class="container">
        <div class="row mt-20">
            <div class="col-md-5 order-md-2 mt-20 mb-20">
                <img data-src="images/programmer-1.png" alt="" class="img-fluid mx-auto lazyload" height="500">
            </div>
            <div class="col-md-7 order-md-1 mt-20 mb-20">
                <form class="row g-3" method="POST" action="contact-submit.php" autocomplete="off">
                    <div class="col-md-6 mb-20 pl-10">
                        <label for="inputEmail4" class="form-label text-uppercase font-weight-bold footer-header">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required minlength="3" maxlength="25">
                    </div>
                    <div class="col-md-6 mb-20 pl-10">
                        <label for="inputEmail4" class="form-label text-uppercase font-weight-bold footer-header">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required minlength="5" maxlength="30">
                    </div>
                    <div class="col-md-12 mb-20 pl-10">
                        <label for="inputCity" class="form-label text-uppercase font-weight-bold footer-header">Message:</label><br>
                        <textarea name="message" class="form-control" id="message" cols="30" rows="6" style="resize: none; width: 100%;" placeholder="Enter Message" required minlength="3" maxlength="25"></textarea>
                    </div>
                    <div class="col-12 mb-20 pl-10 text-center">
                        <button type="submit" class="btn btn-primary text-white sign-in-btn">Sign in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</main>


<?php include('footer.php') ?>