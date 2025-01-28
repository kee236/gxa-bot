<?php

class SCB_Payment {

    private $api_key;
    private $api_secret;

    public function __construct($api_key, $api_secret) {
        $this->api_key = $api_key;
        $this->api_secret = $api_secret;
    }

    public function createTransaction($amount, $transaction_id) {
        $url = "https://api.scb.co.th/v1/payment/create";

        $data = [
            'transactionId' => $transaction_id,
            'amount' => $amount,
            'currency' => 'THB'
        ];

        $headers = [
            "Content-Type: application/json",
            "Authorization: Bearer " . $this->getAccessToken()
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response, true);
    }

    private function getAccessToken() {
        // Logic สำหรับการรับ Access Token
        return "access_token_example";
    }
}
?>