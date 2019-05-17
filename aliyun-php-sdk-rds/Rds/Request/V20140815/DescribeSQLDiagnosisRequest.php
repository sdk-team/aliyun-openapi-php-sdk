<?php

namespace Rds\Request\V20140815;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeSQLDiagnosis
 *
 * @method string getSQLDiagId()
 * @method string getDBInstanceId()
 */
class DescribeSQLDiagnosisRequest extends \RpcAcsRequest
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
            'Rds',
            '2014-08-15',
            'DescribeSQLDiagnosis'
        );
    }

    /**
     * @param string $sQLDiagId
     *
     * @return $this
     */
    public function setSQLDiagId($sQLDiagId)
    {
        $this->requestParameters['SQLDiagId'] = $sQLDiagId;
        $this->queryParameters['SQLDiagId'] = $sQLDiagId;

        return $this;
    }

    /**
     * @param string $dBInstanceId
     *
     * @return $this
     */
    public function setDBInstanceId($dBInstanceId)
    {
        $this->requestParameters['DBInstanceId'] = $dBInstanceId;
        $this->queryParameters['DBInstanceId'] = $dBInstanceId;

        return $this;
    }
}
