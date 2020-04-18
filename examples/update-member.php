<?php
require_once "../vendor/autoload.php";

// Create config and set host
$config = PkIo\Configuration::getDefaultConfiguration();
$config->setHost("https://api.pub1.passkit.io");

// Create auth object for token generation
$auth = new PkIo\Auth("myApiKey", "myApiSecret");

// Create the API instance
$apiInstance = new PkIo\Api\MembersRESTAPIApi(
    new GuzzleHttp\Client(),
    $config
);

// Generate a new JWT.
// IMPORTANT: Our JWTs are short-lived; if you plan to re-use the API instance for multiple requests, then make sure to generate a new token for each request (repeat below line of code)
$apiInstance->getConfig()->setApiKey('Authorization', $auth->GenerateJwt());

// Set the Member body (an update requires both the tier & program ID + PassKit Member ID or External ID)
$body = new PkIo\Model\MembersMember();
$body->setId("myPassKitMemberId");
$body->setProgramId("myProgramId");
$body->setTierId("myTierId");
$body->setPoints(2000);

try {
    $result = $apiInstance->updateMember($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersRESTAPIApi->updateMember: ', $e->getMessage(), PHP_EOL;
}
?>