<?php

namespace PkIo;

Class Auth {
    private $apiKey;
    private $apiSecret;

    public function __construct($apiKey, $apiSecret)
    {
        $this->apiKey = $apiKey;
        $this->apiSecret = $apiSecret;
    }

    public function GenerateJwt() {
        // Create token header as a JSON string
        $header = json_encode([
            "typ" => "JWT",
            "alg" => "HS256"]
        );

        // Create token payload as a JSON string
        $payload = json_encode([
            "uid" => $this->apiKey,
            "iat" => time()-10, // generate iat 10 seconds in the past to account for server time offset
            "exp" => time()+30, // tokens are short lived
        ]);

        // Encode Header to Base64Url String
        $base64UrlHeader = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($header));

        // Encode Payload to Base64Url String
        $base64UrlPayload = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($payload));

        // Create Signature Hash
        $signature = hash_hmac('sha256', $base64UrlHeader . "." . $base64UrlPayload, $this->apiSecret, true);

        // Encode Signature to Base64Url String
        $base64UrlSignature = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($signature));

        return $base64UrlHeader . "." . $base64UrlPayload . "." . $base64UrlSignature;
    }
}