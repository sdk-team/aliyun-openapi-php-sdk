<?php

namespace companyreg\Request\V20190508;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CheckCompanyReg
 *
 * @method string getOrgType()
 * @method string getIndustryType()
 * @method string getTradeName()
 * @method string getCity()
 * @method string getNameType()
 */
class CheckCompanyRegRequest extends \RpcAcsRequest
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
            'CheckCompanyReg'
        );
    }

    /**
     * @param string $orgType
     *
     * @return $this
     */
    public function setOrgType($orgType)
    {
        $this->requestParameters['OrgType'] = $orgType;
        $this->queryParameters['OrgType'] = $orgType;

        return $this;
    }

    /**
     * @param string $industryType
     *
     * @return $this
     */
    public function setIndustryType($industryType)
    {
        $this->requestParameters['IndustryType'] = $industryType;
        $this->queryParameters['IndustryType'] = $industryType;

        return $this;
    }

    /**
     * @param string $tradeName
     *
     * @return $this
     */
    public function setTradeName($tradeName)
    {
        $this->requestParameters['TradeName'] = $tradeName;
        $this->queryParameters['TradeName'] = $tradeName;

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
     * @param string $nameType
     *
     * @return $this
     */
    public function setNameType($nameType)
    {
        $this->requestParameters['NameType'] = $nameType;
        $this->queryParameters['NameType'] = $nameType;

        return $this;
    }
}
