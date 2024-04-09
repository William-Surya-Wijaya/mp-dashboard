<?php

function generateToken($userId) {
    $secretKey = "yourSecretKey";
    $timestamp = time();
    $tokenPayload = $userId . "|" . $timestamp;

    $token = hash_hmac('sha256', $tokenPayload, $secretKey);

    return $token;
}

function validateToken($token) {
    //

    return true;
}
