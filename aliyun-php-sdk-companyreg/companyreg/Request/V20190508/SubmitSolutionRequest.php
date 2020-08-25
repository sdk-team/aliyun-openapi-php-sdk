<?php

namespace companyreg\Request\V20190508;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SubmitSolution
 *
 * @method string getBizType()
 * @method string getSolution()
 * @method string getIntentionBizId()
 */
class SubmitSolutionRequest extends \RpcAcsRequest
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
            'SubmitSolution'
        );
    }

    /**
     * @param string $bizType
     *
     * @return $this
     */
    public function setBizType($bizType)
    {
        $this->requestParameters['BizType'] = $bizType;
        $this->queryParameters['BizType'] = $bizType;

        return $this;
    }

    /**
     * @param string $solution
     *
     * @return $this
     */
    public function setSolution($solution)
    {
        $this->requestParameters['Solution'] = $solution;
        $this->queryParameters['Solution'] = $solution;

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
}
