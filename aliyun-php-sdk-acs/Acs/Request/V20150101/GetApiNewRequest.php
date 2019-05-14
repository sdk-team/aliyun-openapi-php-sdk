<?php

namespace Acs\Request\V20150101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetApiNew
 *
 * @method string getApiName()
 * @method string getProductName()
 * @method string getVersionName()
 * @method string getAccept()
 */
class GetApiNewRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/[ProductName]/[VersionName]/[ApiName]?new';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Acs',
            '2015-01-01',
            'GetApiNew'
        );
    }

    /**
     * @param string $apiName
     *
     * @return $this
     */
    public function setApiName($apiName)
    {
        $this->requestParameters['ApiName'] = $apiName;
        $this->pathParameters['ApiName'] = $apiName;

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
        $this->pathParameters['ProductName'] = $productName;

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
        $this->pathParameters['VersionName'] = $versionName;

        return $this;
    }

    /**
     * @param string $accept
     *
     * @return $this
     */
    public function setAccept($accept)
    {
        $this->requestParameters['Accept'] = $accept;
        $this->headers['Accept'] = $accept;

        return $this;
    }
}
