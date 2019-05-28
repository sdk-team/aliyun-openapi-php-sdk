<?php

namespace Yundun\Request\V20150416;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ConfigDdos
 *
 * @method string getStrategyPosition()
 * @method string getInstanceId()
 * @method string getLevel()
 * @method string getInstanceType()
 * @method string getFlowPosition()
 */
class ConfigDdosRequest extends \RpcAcsRequest
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
            'Yundun',
            '2015-04-16',
            'ConfigDdos',
            'yundun'
        );
    }

    /**
     * @param string $strategyPosition
     *
     * @return $this
     */
    public function setStrategyPosition($strategyPosition)
    {
        $this->requestParameters['StrategyPosition'] = $strategyPosition;
        $this->queryParameters['StrategyPosition'] = $strategyPosition;

        return $this;
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $level
     *
     * @return $this
     */
    public function setLevel($level)
    {
        $this->requestParameters['Level'] = $level;
        $this->queryParameters['Level'] = $level;

        return $this;
    }

    /**
     * @param string $instanceType
     *
     * @return $this
     */
    public function setInstanceType($instanceType)
    {
        $this->requestParameters['InstanceType'] = $instanceType;
        $this->queryParameters['InstanceType'] = $instanceType;

        return $this;
    }

    /**
     * @param string $flowPosition
     *
     * @return $this
     */
    public function setFlowPosition($flowPosition)
    {
        $this->requestParameters['FlowPosition'] = $flowPosition;
        $this->queryParameters['FlowPosition'] = $flowPosition;

        return $this;
    }
}
