<?php session_start(); ?>
<?php include('header.php') ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<?php include('nav.php') ?>
<?php
if (isset($_SESSION['response'])) {
    $response = $_SESSION['response'];
    $response = json_decode($response, true);
    echo $response['alert'];
    unset($_SESSION['response']);
}
?>

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
                        <?php
                        if (isset($_SESSION['val']['name'])) {
                            $val = $_SESSION['val']['name'];
                            echo "<p class=\"text-danger font-bold font-1 mb-0\">" . ucwords($val) . "</p>";
                        }
                        ?>
                    </div>
                    <div class="col-md-6 mb-20 pl-10">
                        <label for="inputEmail4" class="form-label text-uppercase font-weight-bold footer-header">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required minlength="5" maxlength="30">
                        <?php
                        if (isset($_SESSION['val']['email'])) {
                            $val = $_SESSION['val']['email'];
                            echo "<p class=\"text-danger font-bold font-1 mb-0\">" . ucwords($val) . "</p>";
                        }
                        ?>
                    </div>
                    <div class="col-md-12 mb-20 pl-10">
                        <label for="inputCity" class="form-label text-uppercase font-weight-bold footer-header">Message:</label><br>
                        <textarea name="message" class="form-control" id="message" cols="30" rows="6" style="resize: none; width: 100%;" placeholder="Enter Message" required minlength="5" maxlength="150"></textarea>
                        <?php
                        if (isset($_SESSION['val']['message'])) {
                            $val = $_SESSION['val']['message'];
                            echo "<p class=\"text-danger font-bold font-1 mb-0\">" . ucwords($val) . "</p>";
                        }
                        ?>
                    </div>
                    <div class="col-12 mb-20 pl-10 text-center">
                        <button type="submit" class="btn btn-primary text-white sign-in-btn">Submit</button>
                    </div>
                    <input type="hidden" name="recaptcha_response" value="" id="recaptchaResponse">
                </form>
            </div>
        </div>
    </div>

</main>
<!-- captcha -->
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=6LctUZkeAAAAAHfaVfeQ--gaIHWyVT7_AiNproWU" async defer></script>
<script>
    var onloadCallback = function() {
        grecaptcha.ready(function() {
            grecaptcha.execute('6LctUZkeAAAAAHfaVfeQ--gaIHWyVT7_AiNproWU', {
                action: 'submit'
            }).then(function(token) {
                var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;
            })
        })
    }
</script>
<?php
if (isset($_SESSION['val'])) {
    unset($_SESSION['val']);
}
?>
<?php include('footer.php') ?>