<?php session_start(); ?>
<?php

require_once 'autoload.php';

Access::via()->post();
$validate = Request::validate([
    "name" => ["required", 'minlen' => 3, 'maxlen' => 25],
    "email" => ["required", "email", 'minlen' => 5, 'maxlen' => 30],
    'message' => ['required', 'minlen' => 5, 'maxlen' => 150],
    'recaptcha_response' => ['required'],
]);
if (count($validate) > 0) {
    $_SESSION['val'] = $validate;
    return Redirect::to()->back();
}
// verify captcha
$gcaptchaUrl = 'https://www.google.com/recaptcha/api/siteverify';

// live websitekey
$gcaptchaSecretKey = '6Le1x5seAAAAAD9S7VDs3YR6Cl78N-3jIu3W9p9T';

// local website key
// $gcaptchaSecretKey = '6LctUZkeAAAAAB3dHz1KAZln7BBnUpcS-KhbeSZq';

$set_recaptcha_response = $_POST['recaptcha_response'];
$get_recaptcha_response = file_get_contents($gcaptchaUrl . '?secret=' . $gcaptchaSecretKey . '&response=' . $set_recaptcha_response);
$get_recaptcha_response = json_decode($get_recaptcha_response);

if ($get_recaptcha_response->success == true && $get_recaptcha_response->score >= 0.5 && $get_recaptcha_response->action == 'submit') {
    $name = trim(Request::get('name'));
    $email = trim(Request::get('email'));
    $message = trim(Request::get('message'));

    $msg = "Name :" . $name . "<br>Email :" . $email . '<br>Message : ' . $message;

    // To send HTML mail, the Content-type header must be set
    // $headers = "Content-type: text/html\r\n";
    // $headers .= 'From:  ' . $name . ' <' . $email . '>' . " \r\n" .
    //     'Reply-To: ' .  $email . "\r\n";

    include('mail.php');
    return Redirect::to()->back();
} else {
    $response = [
        'status' => 'false',
        'msgStatus' => 'error',
        'alert' => "<script>
						Swal.fire({
							icon: 'error',
							title: 'Oops...',
							text: 'An error occured while trying to send your message.',
						})
					</script>"
    ];
    $_SESSION['response'] = json_encode($response);
    return Redirect::to()->back();
}
