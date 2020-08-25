<?php

namespace companyreg\Request\V20190508;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of AcceptPartnerNotification
 *
 * @method string getOfficialFileURL()
 * @method string getBizId()
 * @method string getApplicationStatus()
 */
class AcceptPartnerNotificationRequest extends \RpcAcsRequest
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
            'AcceptPartnerNotification'
        );
    }

    /**
     * @param string $officialFileURL
     *
     * @return $this
     */
    public function setOfficialFileURL($officialFileURL)
    {
        $this->requestParameters['OfficialFileURL'] = $officialFileURL;
        $this->queryParameters['OfficialFileURL'] = $officialFileURL;

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
     * @param string $applicationStatus
     *
     * @return $this
     */
    public function setApplicationStatus($applicationStatus)
    {
        $this->requestParameters['ApplicationStatus'] = $applicationStatus;
        $this->queryParameters['ApplicationStatus'] = $applicationStatus;

        return $this;
    }
}
