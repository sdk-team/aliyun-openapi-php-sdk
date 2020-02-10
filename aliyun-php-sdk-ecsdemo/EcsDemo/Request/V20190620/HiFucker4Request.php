<?php

namespace EcsDemo\Request\V20190620;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of HiFucker4
 *
 * @method array getResourceTypeCodess()
 * @method string getProduct()
 * @method string getFromCache()
 * @method string getAcceptLanguage()
 * @method string getPageSize()
 * @method array getFilterss()
 * @method string getEnv()
 * @method string getSiteType()
 * @method string getPageNumber()
 */
class HiFucker4Request extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'EcsDemo',
            '2019-06-20',
            'HiFucker4'
        );
    }

    /**
     * @param array $resourceTypeCodes
     *
     * @return $this
     */
	public function setResourceTypeCodess(array $resourceTypeCodes)
	{
	    $this->requestParameters['ResourceTypeCodess'] = $resourceTypeCodes;
		foreach ($resourceTypeCodes as $i => $iValue) {
			$this->queryParameters['ResourceTypeCodes.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $product
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->requestParameters['Product'] = $product;
        $this->queryParameters['Product'] = $product;

        return $this;
    }

    /**
     * @param string $fromCache
     *
     * @return $this
     */
    public function setFromCache($fromCache)
    {
        $this->requestParameters['FromCache'] = $fromCache;
        $this->queryParameters['FromCache'] = $fromCache;

        return $this;
    }

    /**
     * @param string $acceptLanguage
     *
     * @return $this
     */
    public function setAcceptLanguage($acceptLanguage)
    {
        $this->requestParameters['AcceptLanguage'] = $acceptLanguage;
        $this->queryParameters['AcceptLanguage'] = $acceptLanguage;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->requestParameters['PageSize'] = $pageSize;
        $this->queryParameters['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param array $filters
     *
     * @return $this
     */
	public function setFilterss(array $filters)
	{
	    $this->requestParameters['Filterss'] = $filters;
		foreach ($filters as $i => $iValue) {
			$this->queryParameters['Filters.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $env
     *
     * @return $this
     */
    public function setEnv($env)
    {
        $this->requestParameters['Env'] = $env;
        $this->queryParameters['Env'] = $env;

        return $this;
    }

    /**
     * @param string $siteType
     *
     * @return $this
     */
    public function setSiteType($siteType)
    {
        $this->requestParameters['SiteType'] = $siteType;
        $this->queryParameters['SiteType'] = $siteType;

        return $this;
    }

    /**
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        $this->requestParameters['PageNumber'] = $pageNumber;
        $this->queryParameters['PageNumber'] = $pageNumber;

        return $this;
    }
}
