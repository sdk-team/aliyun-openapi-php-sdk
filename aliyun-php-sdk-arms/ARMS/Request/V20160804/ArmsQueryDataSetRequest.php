<?php

namespace ARMS\Request\V20160804;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ArmsQueryDataSet
 *
 * @method string getDateStr()
 * @method string getMinTime()
 * @method string getMaxTime()
 * @method array getMeasuress()
 * @method string getIntervalInSec()
 * @method string getDatasetId()
 * @method array getDimensionss()
 */
class ArmsQueryDataSetRequest extends \RpcAcsRequest
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
            'ARMS',
            '2016-08-04',
            'ArmsQueryDataSet',
            'arms'
        );
    }

    /**
     * @param string $dateStr
     *
     * @return $this
     */
    public function setDateStr($dateStr)
    {
        $this->requestParameters['DateStr'] = $dateStr;
        $this->queryParameters['DateStr'] = $dateStr;

        return $this;
    }

    /**
     * @param string $minTime
     *
     * @return $this
     */
    public function setMinTime($minTime)
    {
        $this->requestParameters['MinTime'] = $minTime;
        $this->queryParameters['MinTime'] = $minTime;

        return $this;
    }

    /**
     * @param string $maxTime
     *
     * @return $this
     */
    public function setMaxTime($maxTime)
    {
        $this->requestParameters['MaxTime'] = $maxTime;
        $this->queryParameters['MaxTime'] = $maxTime;

        return $this;
    }

    /**
     * @param array $measures
     *
     * @return $this
     */
    public function setMeasuress(array $measures)
    {
        $this->requestParameters['Measuress'] = $measures;
        foreach ($measures as $i => $iValue) {
            $this->queryParameters['Measures.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $intervalInSec
     *
     * @return $this
     */
    public function setIntervalInSec($intervalInSec)
    {
        $this->requestParameters['IntervalInSec'] = $intervalInSec;
        $this->queryParameters['IntervalInSec'] = $intervalInSec;

        return $this;
    }

    /**
     * @param string $datasetId
     *
     * @return $this
     */
    public function setDatasetId($datasetId)
    {
        $this->requestParameters['DatasetId'] = $datasetId;
        $this->queryParameters['DatasetId'] = $datasetId;

        return $this;
    }

    /**
     * @param array $dimensions
     *
     * @return $this
     */
    public function setDimensionss(array $dimensions)
    {
        $this->requestParameters['Dimensionss'] = $dimensions;
        foreach ($dimensions as $depth1 => $depth1Value) {
            $this->queryParameters['Dimensions.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->queryParameters['Dimensions.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
        }

        return $this;
    }
}
