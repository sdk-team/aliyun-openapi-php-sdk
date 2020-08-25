<?php

namespace companyreg\Request\V20190508;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryCompanyRegOrder
 *
 * @method string getActionType()
 * @method string getOrderNo()
 * @method string getBizCode()
 * @method string getActionRequestId()
 * @method string getOperatorType()
 */
class QueryCompanyRegOrderRequest extends \RpcAcsRequest
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
            'QueryCompanyRegOrder'
        );
    }

    /**
     * @param string $actionType
     *
     * @return $this
     */
    public function setActionType($actionType)
    {
        $this->requestParameters['ActionType'] = $actionType;
        $this->queryParameters['ActionType'] = $actionType;

        return $this;
    }

    /**
     * @param string $orderNo
     *
     * @return $this
     */
    public function setOrderNo($orderNo)
    {
        $this->requestParameters['OrderNo'] = $orderNo;
        $this->queryParameters['OrderNo'] = $orderNo;

        return $this;
    }

    /**
     * @param string $bizCode
     *
     * @return $this
     */
    public function setBizCode($bizCode)
    {
        $this->requestParameters['BizCode'] = $bizCode;
        $this->queryParameters['BizCode'] = $bizCode;

        return $this;
    }

    /**
     * @param string $actionRequestId
     *
     * @return $this
     */
    public function setActionRequestId($actionRequestId)
    {
        $this->requestParameters['ActionRequestId'] = $actionRequestId;
        $this->queryParameters['ActionRequestId'] = $actionRequestId;

        return $this;
    }

    /**
     * @param string $operatorType
     *
     * @return $this
     */
    public function setOperatorType($operatorType)
    {
        $this->requestParameters['OperatorType'] = $operatorType;
        $this->queryParameters['OperatorType'] = $operatorType;

        return $this;
    }
}
