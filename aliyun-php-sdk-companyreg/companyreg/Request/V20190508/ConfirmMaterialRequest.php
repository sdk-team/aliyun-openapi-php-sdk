<?php

namespace companyreg\Request\V20190508;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ConfirmMaterial
 *
 * @method string getBizId()
 * @method string getUserOtherList()
 */
class ConfirmMaterialRequest extends \RpcAcsRequest
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
            'ConfirmMaterial'
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
     * @param string $userOtherList
     *
     * @return $this
     */
    public function setUserOtherList($userOtherList)
    {
        $this->requestParameters['UserOtherList'] = $userOtherList;
        $this->queryParameters['UserOtherList'] = $userOtherList;

        return $this;
    }
}
