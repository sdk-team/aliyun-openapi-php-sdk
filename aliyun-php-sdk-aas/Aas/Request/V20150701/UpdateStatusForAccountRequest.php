<?php

namespace Aas\Request\V20150701;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateStatusForAccount
 *
 * @method string getAccountStatus()
 * @method string getPK()
 */
class UpdateStatusForAccountRequest extends \RpcAcsRequest
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
            'UpdateStatusForAccount',
            'aas'
        );
    }

    /**
     * @param string $accountStatus
     *
     * @return $this
     */
    public function setAccountStatus($accountStatus)
    {
        $this->requestParameters['AccountStatus'] = $accountStatus;
        $this->queryParameters['AccountStatus'] = $accountStatus;

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
