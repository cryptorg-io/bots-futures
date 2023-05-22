<?php

namespace CryptorgApi;

class CryptorgApiRequest
{
    const API_URL = 'https://api2.cryptorg.net';

    private string $apiKey;
    private string $apiSecret;

    /**
     * @param string $apiKey
     * @param string $apiSecret
     */
    public function __construct(string $apiKey, string $apiSecret)
    {
        $this->apiKey = $apiKey;
        $this->apiSecret = $apiSecret;
    }

    /**
     * Send API Request
     * @param string $method
     * @param string $url
     * @param array|null $params
     * @param string|null $attributes
     * @return array
     */
    public function sendRequest(string $method, string $url, array $params = null, string $attributes = null): array
    {
        $query = json_encode(is_null($params) ? '' : http_build_query($params, '', '&'));
        $query = str_replace('"', '', $query);

        $nonce = time();

        $strForSign = sprintf("%s/%s/%s", $url, $nonce, $query);

        $hash = hash_hmac('sha256', base64_encode($strForSign), $this->apiSecret);

        $header = [
            "CTG-API-SIGNATURE: " . $hash,
            "CTG-API-KEY: " . $this->apiKey,
            "CTG-API-NONCE: " . $nonce
        ];

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, static::API_URL . $url . '?' . $query);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        if ($method == "POST") {
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $attributes);
        }

        $content = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);

        return [
            'http_code' => $httpCode,
            'content' => $content,
        ];
    }
}
