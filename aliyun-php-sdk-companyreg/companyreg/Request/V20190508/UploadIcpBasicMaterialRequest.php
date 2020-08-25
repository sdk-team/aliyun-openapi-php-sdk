<?php

namespace companyreg\Request\V20190508;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UploadIcpBasicMaterial
 *
 * @method string getBizId()
 * @method string getBusinessLicense()
 * @method string getIdCardList()
 */
class UploadIcpBasicMaterialRequest extends \RpcAcsRequest
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
            'UploadIcpBasicMaterial'
        );
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
     * @param string $businessLicense
     *
     * @return $this
     */
    public function setBusinessLicense($businessLicense)
    {
        $this->requestParameters['BusinessLicense'] = $businessLicense;
        $this->queryParameters['BusinessLicense'] = $businessLicense;

        return $this;
    }

    /**
     * @param string $idCardList
     *
     * @return $this
     */
    public function setIdCardList($idCardList)
    {
        $this->requestParameters['IdCardList'] = $idCardList;
        $this->queryParameters['IdCardList'] = $idCardList;

        return $this;
    }
}
