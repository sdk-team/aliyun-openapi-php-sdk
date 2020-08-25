<?php

namespace companyreg\Request\V20190508;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of AcceptBookkeepingAuditResult
 *
 * @method string getNote()
 * @method string getOrgCode()
 * @method string getOrgAddress()
 * @method string getOrgName()
 * @method string getServiceStartTime()
 * @method string getAuditResult()
 * @method string getBizId()
 * @method string getOrgMobile()
 */
class AcceptBookkeepingAuditResultRequest extends \RpcAcsRequest
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
            'AcceptBookkeepingAuditResult'
        );
    }

    /**
     * @param string $note
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->requestParameters['Note'] = $note;
        $this->queryParameters['Note'] = $note;

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
     * @param string $serviceStartTime
     *
     * @return $this
     */
    public function setServiceStartTime($serviceStartTime)
    {
        $this->requestParameters['ServiceStartTime'] = $serviceStartTime;
        $this->queryParameters['ServiceStartTime'] = $serviceStartTime;

        return $this;
    }

    /**
     * @param string $auditResult
     *
     * @return $this
     */
    public function setAuditResult($auditResult)
    {
        $this->requestParameters['AuditResult'] = $auditResult;
        $this->queryParameters['AuditResult'] = $auditResult;

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
