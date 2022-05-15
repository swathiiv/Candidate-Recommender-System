
<?php


require_once 'vendor/autoload.php';

use Twilio\Rest\Client;


$sid    = "AC0e27fd20901771c19d6b2f1e6c474a91";
$token  = "838fca4cf2a670bbe7f419b478fda218";
$twilio = new Client($sid, $token);

$message = $twilio->messages
                  ->create("whatsapp:+919632574574", // to
                           [
                               "from" => "whatsapp:+14155238886",
                               "body" => "Hello PHP worksssss yayyyy!"
                           ]
                  );

print($message->sid);

?>
