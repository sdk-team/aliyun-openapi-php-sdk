<?php

namespace Acs\Request\V20150101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteApiOnline
 *
 * @method string getEnvironment()
 * @method string getName()
 * @method string getProductName()
 * @method string getVersionName()
 */
class DeleteApiOnlineRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/deleteApiOnline';

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Acs',
            '2015-01-01',
            'DeleteApiOnline',
            'dsafsd'
        );
    }

    /**
     * @param string $environment
     *
     * @return $this
     */
    public function setEnvironment($environment)
    {
        $this->requestParameters['Environment'] = $environment;
        $this->queryParameters['Environment'] = $environment;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->requestParameters['Name'] = $name;
        $this->queryParameters['Name'] = $name;

        return $this;
    }

    /**
     * @param string $productName
     *
     * @return $this
     */
    public function setProductName($productName)
    {
        $this->requestParameters['ProductName'] = $productName;
        $this->queryParameters['ProductName'] = $productName;

        return $this;
    }

    /**
     * @param string $versionName
     *
     * @return $this
     */
    public function setVersionName($versionName)
    {
        $this->requestParameters['VersionName'] = $versionName;
        $this->queryParameters['VersionName'] = $versionName;

        return $this;
    }
}
