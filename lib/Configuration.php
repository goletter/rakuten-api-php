<?php
namespace Goletter\RakutenAPI;

/**
 * Class Configuration
 * @package Goletter\YahooAPI
 */
class Configuration
{
    private static $defaultConfiguration;

    /**
     * The host.
     *
     * @var string
     */
    protected $host = 'https://api.rms.rakuten.co.jp/es/2.0';

    /**
     * Debug switch (default set to false).
     *
     * @var bool
     */
    protected $debug = false;

    /**
     * Debug file location (log to STDOUT by default).
     *
     * @var string
     */
    protected $debugFile = 'php://output';

    /** @var string|null */
    protected $licenseKey;
    /** @var string|null */
    protected $serviceSecret;
    /** @var string|null */
    protected $shopUrlName;

    /**
     * Constructor.
     */
    public static function getDefaultConfiguration()
    {
        if (null === self::$defaultConfiguration) {
            self::$defaultConfiguration = new Configuration();
        }

        return self::$defaultConfiguration;
    }

    /**
     * @param $licenseKey
     * @return $this
     */
    public function setLicenseKey($licenseKey)
    {
        $this->licenseKey = $licenseKey;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLicenseKey()
    {
        return $this->licenseKey;
    }

    /**
     * @param $serviceSecret
     * @return $this
     */
    public function setServiceSecret($serviceSecret)
    {
        $this->serviceSecret = $serviceSecret;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getServiceSecret()
    {
        return $this->serviceSecret;
    }

    /**
     * @param $shopUrlName
     * @return $this
     */
    public function setShopUrlName($shopUrlName)
    {
        $this->shopUrlName = $shopUrlName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getShopUrlName()
    {
        return $this->shopUrlName;
    }

    /**
     * Sets the host.
     *
     * @param string $host Host
     *
     * @return $this
     */
    public function setHost($host)
    {
        $this->host = $host;

        return $this;
    }

    /**
     * Gets the host.
     *
     * @return string Host
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Sets debug flag.
     *
     * @param bool $debug Debug flag
     *
     * @return $this
     */
    public function setDebug($debug)
    {
        $this->debug = $debug;

        return $this;
    }

    /**
     * Gets the debug flag.
     *
     * @return bool
     */
    public function getDebug()
    {
        return $this->debug;
    }

    /**
     * Sets the debug file.
     *
     * @param string $debugFile Debug file
     *
     * @return $this
     */
    public function setDebugFile($debugFile)
    {
        $this->debugFile = $debugFile;

        return $this;
    }

    /**
     * Gets the debug file.
     *
     * @return string
     */
    public function getDebugFile()
    {
        return $this->debugFile;
    }
}