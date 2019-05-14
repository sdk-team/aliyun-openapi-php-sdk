<?php

namespace Acs\Request\V20150101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetVersionWithAllApi
 *
 * @method string getProductName()
 * @method string getIncludeOfflineApi()
 * @method string getVersionName()
 * @method string getAccept()
 */
class GetVersionWithAllApiRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/VersionWithAllApi/[ProductName]/[VersionName]';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Acs',
            '2015-01-01',
            'GetVersionWithAllApi'
        );
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
     * @param string $includeOfflineApi
     *
     * @return $this
     */
    public function setIncludeOfflineApi($includeOfflineApi)
    {
        $this->requestParameters['IncludeOfflineApi'] = $includeOfflineApi;
        $this->queryParameters['IncludeOfflineApi'] = $includeOfflineApi;

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
