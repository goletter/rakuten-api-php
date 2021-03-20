<?php
namespace Goletter\RakutenAPI;

class Signature
{
    /**
     * @param Configuration $config
     * @param string $host
     * @param string $method
     * @param string $uri
     * @param string $queryString
     * @param array $data
     * @return array
     */
    public static function calculateSignature(
        Configuration $config,
        string $host,
        string $method,
        $uri = '',
        $queryString = '',
        $data = []
    ) {
        return self::calculateSignatureForService(
            $host,
            $method,
            $uri,
            $queryString,
            $data,
            $config->getLicenseKey(),
            $config->getServiceSecret()
        );
    }

    public static function calculateSignatureForService(
        string $host,
        string $method,
        $uri,
        $queryString,
        $data,
        $licenseKey,
        $serviceSecret
    ){
        $canonicalHeaders = [
            // 'host' => $host,
        ];

        $accessToken = base64_encode($serviceSecret . ':' . $licenseKey);
        return array_merge($canonicalHeaders, [
            'Authorization' => 'ESA ' . $accessToken,
        ]);
    }
}