<?php

namespace Aas\Request\V20150701;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateAccessKeyStatusForAccount
 *
 * @method string getAKStatus()
 * @method string getAKId()
 * @method string getPK()
 */
class UpdateAccessKeyStatusForAccountRequest extends \RpcAcsRequest
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
            'Aas',
            '2015-07-01',
            'UpdateAccessKeyStatusForAccount'
        );
    }

    /**
     * @param string $aKStatus
     *
     * @return $this
     */
    public function setAKStatus($aKStatus)
    {
        $this->requestParameters['AKStatus'] = $aKStatus;
        $this->queryParameters['AKStatus'] = $aKStatus;

        return $this;
    }

    /**
     * @param string $aKId
     *
     * @return $this
     */
    public function setAKId($aKId)
    {
        $this->requestParameters['AKId'] = $aKId;
        $this->queryParameters['AKId'] = $aKId;

        return $this;
    }

    /**
     * @param string $pK
     *
     * @return $this
     */
    public function setPK($pK)
    {
        $this->requestParameters['PK'] = $pK;
        $this->queryParameters['PK'] = $pK;

        return $this;
    }
}
