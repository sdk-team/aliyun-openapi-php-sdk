<?php

namespace companyreg\Request\V20190508;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SubmitIcpSolution
 *
 * @method string getArea()
 * @method string getIntentionBizId()
 * @method string getIcpType()
 * @method string getCompanyAddress()
 * @method string getCompanyName()
 * @method string getBizId()
 */
class SubmitIcpSolutionRequest extends \RpcAcsRequest
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
            'SubmitIcpSolution'
        );
    }

    /**
     * @param string $area
     *
     * @return $this
     */
    public function setArea($area)
    {
        $this->requestParameters['Area'] = $area;
        $this->queryParameters['Area'] = $area;

        return $this;
    }

    /**
     * @param string $intentionBizId
     *
     * @return $this
     */
    public function setIntentionBizId($intentionBizId)
    {
        $this->requestParameters['IntentionBizId'] = $intentionBizId;
        $this->queryParameters['IntentionBizId'] = $intentionBizId;

        return $this;
    }

    /**
     * @param string $icpType
     *
     * @return $this
     */
    public function setIcpType($icpType)
    {
        $this->requestParameters['IcpType'] = $icpType;
        $this->queryParameters['IcpType'] = $icpType;

        return $this;
    }

    /**
     * @param string $companyAddress
     *
     * @return $this
     */
    public function setCompanyAddress($companyAddress)
    {
        $this->requestParameters['CompanyAddress'] = $companyAddress;
        $this->queryParameters['CompanyAddress'] = $companyAddress;

        return $this;
    }

    /**
     * @param string $companyName
     *
     * @return $this
     */
    public function setCompanyName($companyName)
    {
        $this->requestParameters['CompanyName'] = $companyName;
        $this->queryParameters['CompanyName'] = $companyName;

        return $this;
    }

    /**
     * @param string $bizId
     *
     * @return $this
     */
    public function setBizId($bizId)
    {
        $this->requestParameters['BizId'] = $bizId;
        $this->queryParameters['BizId'] = $bizId;

        return $this;
    }
}
