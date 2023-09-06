<?php

class PayComResponse
{
    const LINK = 'https://checkout.paycom.uz';

    public static function createInitialization()
    {
        $TOKEN = '64ef2f2d9f1e571160d52f76';
        $order_id = '1';
        $amount = 5000; // Amount must be decimal

        $params = "m={$TOKEN};ac.order_id={$order_id};a={$amount};"; // Use $amount_decimal
        $encode_params = base64_encode(utf8_encode($params));
        $url = self::LINK . '/' . $encode_params;
        echo $url;
    }
}

PayComResponse::createInitialization();
