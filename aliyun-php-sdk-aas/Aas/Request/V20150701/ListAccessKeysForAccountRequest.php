<?php

namespace Aas\Request\V20150701;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListAccessKeysForAccount
 *
 * @method string getAKType()
 * @method string getAKStatus()
 * @method string getPK()
 */
class ListAccessKeysForAccountRequest extends \RpcAcsRequest
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
            'ListAccessKeysForAccount',
            'aas'
        );
    }

    /**
     * @param string $aKType
     *
     * @return $this
     */
    public function setAKType($aKType)
    {
        $this->requestParameters['AKType'] = $aKType;
        $this->queryParameters['AKType'] = $aKType;

        return $this;
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
