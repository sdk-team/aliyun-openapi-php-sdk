<?php

namespace companyreg\Request\V20190508;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryBookkeepingCommodities
 *
 * @method string getServiceType()
 * @method string getCity()
 * @method string getCompanyType()
 * @method string getAreaType()
 */
class QueryBookkeepingCommoditiesRequest extends \RpcAcsRequest
{

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
            'companyreg',
            '2019-05-08',
            'QueryBookkeepingCommodities'
        );
    }

    /**
     * @param string $serviceType
     *
     * @return $this
     */
    public function setServiceType($serviceType)
    {
        $this->requestParameters['ServiceType'] = $serviceType;
        $this->queryParameters['ServiceType'] = $serviceType;

        return $this;
    }

    /**
     * @param string $city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->requestParameters['City'] = $city;
        $this->queryParameters['City'] = $city;

        return $this;
    }

    /**
     * @param string $companyType
     *
     * @return $this
     */
    public function setCompanyType($companyType)
    {
        $this->requestParameters['CompanyType'] = $companyType;
        $this->queryParameters['CompanyType'] = $companyType;

        return $this;
    }

    /**
     * @param string $areaType
     *
     * @return $this
     */
    public function setAreaType($areaType)
    {
        $this->requestParameters['AreaType'] = $areaType;
        $this->queryParameters['AreaType'] = $areaType;

        return $this;
    }
}
