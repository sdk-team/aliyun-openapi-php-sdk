<?php

namespace companyreg\Request\V20190508;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateBookkeepingOrg
 *
 * @method string getOrgAddress()
 * @method string getOrgName()
 * @method string getOrgCode()
 * @method string getOrgMobile()
 */
class UpdateBookkeepingOrgRequest extends \RpcAcsRequest
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
            'UpdateBookkeepingOrg'
        );
    }

    /**
     * @param string $orgAddress
     *
     * @return $this
     */
    public function setOrgAddress($orgAddress)
    {
        $this->requestParameters['OrgAddress'] = $orgAddress;
        $this->queryParameters['OrgAddress'] = $orgAddress;

        return $this;
    }

    /**
     * @param string $orgName
     *
     * @return $this
     */
    public function setOrgName($orgName)
    {
        $this->requestParameters['OrgName'] = $orgName;
        $this->queryParameters['OrgName'] = $orgName;

        return $this;
    }

    /**
     * @param string $orgCode
     *
     * @return $this
     */
    public function setOrgCode($orgCode)
    {
        $this->requestParameters['OrgCode'] = $orgCode;
        $this->queryParameters['OrgCode'] = $orgCode;

        return $this;
    }

    /**
     * @param string $orgMobile
     *
     * @return $this
     */
    public function setOrgMobile($orgMobile)
    {
        $this->requestParameters['OrgMobile'] = $orgMobile;
        $this->queryParameters['OrgMobile'] = $orgMobile;

        return $this;
    }
}
