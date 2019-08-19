<?php

namespace Drds\Request\V20190123;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SetupDrdsParams
 *
 * @method string getParamLevel()
 * @method array getDatas()
 * @method string getDrdsInstanceId()
 */
class SetupDrdsParamsRequest extends \RpcAcsRequest
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
            'Drds',
            '2019-01-23',
            'SetupDrdsParams',
            'drds'
        );
    }

    /**
     * @param string $paramLevel
     *
     * @return $this
     */
    public function setParamLevel($paramLevel)
    {
        $this->requestParameters['ParamLevel'] = $paramLevel;
        $this->queryParameters['ParamLevel'] = $paramLevel;

        return $this;
    }

    /**
     * @param array $data
     *
     * @return $this
     */
    public function setDatas(array $data)
    {
        $this->requestParameters['Datas'] = $data;
        foreach ($data as $depth1 => $depth1Value) {
            $this->queryParameters['Data.' . ($depth1 + 1) . '.ParamType'] = $depth1Value['ParamType'];
            $this->queryParameters['Data.' . ($depth1 + 1) . '.DbName'] = $depth1Value['DbName'];
            $this->queryParameters['Data.' . ($depth1 + 1) . '.ParamRanges'] = $depth1Value['ParamRanges'];
            $this->queryParameters['Data.' . ($depth1 + 1) . '.ParamVariableName'] = $depth1Value['ParamVariableName'];
            $this->queryParameters['Data.' . ($depth1 + 1) . '.ParamValue'] = $depth1Value['ParamValue'];
        }

        return $this;
    }

    /**
     * @param string $drdsInstanceId
     *
     * @return $this
     */
    public function setDrdsInstanceId($drdsInstanceId)
    {
        $this->requestParameters['DrdsInstanceId'] = $drdsInstanceId;
        $this->queryParameters['DrdsInstanceId'] = $drdsInstanceId;

        return $this;
    }
}
