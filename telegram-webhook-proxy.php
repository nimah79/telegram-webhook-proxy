<?php

/**
 * Telegram Webhook Proxy
 * By NimaH79
 * NimaH79.ir.
 */
define('TIMEOUT', 10);

if (!empty($_GET['url'])) {
    $ch = curl_init($_GET['url']);
    curl_setopt($ch, CURLOPT_POSTFIELDS, file_get_contents('php://input'));
    curl_setopt($ch, CURLOPT_TIMEOUT, TIMEOUT);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, TIMEOUT);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_exec($ch);
    curl_close($ch);
}
