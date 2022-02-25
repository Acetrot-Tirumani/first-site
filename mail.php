<?php

use \Mailjet\Resources;

require 'vendor/autoload.php';

try {
    // if (!mail("tirumaninadar1999@gmail.com", "Website Contact Form", $msg, $headers)) {
    //     throw new Exception;
    // }
    $mj = new \Mailjet\Client('3349c9dd0cb8a3407dacfa87b725587c', '1f7541c9bc35613446ebad8e90120ac9', true, ['version' => 'v3.1']);
    $body = [
        'Messages' => [
            [
                'From' => [
                    'Email' => "firstsitephp2022@gmail.com",
                    'Name' => "Tirumani First Website"
                ],
                'To' => [
                    [
                        'Email' => "tirumaninadar1999@gmail.com",
                        'Name' => "Tirumani Nadar"
                    ]
                ],
                'Subject' => "Mail From Website Contact Form. " . date("d/m/Y"),
                'TextPart' => "Contact Form",
                'HTMLPart' => $msg,
                'CustomID' => "AppGettingStartedTest"
            ]
        ]
    ];
    $response = $mj->post(Resources::$Email, ['body' => $body]);
    // $response->success() && var_dump($response->getData());
    if ($response->success()) {
        $response = [
            'status' => 'true',
            'msgStatus' => 'success',
            'alert' => "<script>
            Swal.fire(
                'Success!',
                'Thank you for Contacting. I will respond to your message as soon as possible.',
                'success'
                )
                </script>"
        ];
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
    }
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
