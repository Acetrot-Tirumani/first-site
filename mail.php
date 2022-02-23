<?php
try {
    if (!mail("tirumaninadar1999@gmail.com", "Website Contact Form", $msg, $headers)) {
        throw new Exception;
    }
    $response = [
        'status' => 'true',
        'msgStatus' => 'success',
        'alert' => "<script>
		Swal.fire(
			'Success!',
			'Thank you for contacting. I will respond to your message as soon as possible.',
			'success'
			)
			</script>"
    ];
    $_SESSION['response'] = json_encode($response);
} catch (Exception $e) {
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
}
