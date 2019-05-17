<?php

namespace Rds\Request\V20140815;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateDBInstanceforFirstPay
 *
 * @method string getDBInstanceStorage()
 * @method string getClientToken()
 * @method string getEngineVersion()
 * @method string getuid()
 * @method string getbidLoginEmail()
 * @method string getEngine()
 * @method string getuidLoginEmail()
 * @method string getDBInstanceNetType()
 * @method string getOwnerAccount()
 * @method string getDBInstanceRemarks()
 * @method string getDBInstanceClass()
 * @method string getbid()
 * @method string getCharacterSetName()
 */
class CreateDBInstanceforFirstPayRequest extends \RpcAcsRequest
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
            'CreateDBInstanceforFirstPay'
        );
    }

    /**
     * @param string $dBInstanceStorage
     *
     * @return $this
     */
    public function setDBInstanceStorage($dBInstanceStorage)
    {
        $this->requestParameters['DBInstanceStorage'] = $dBInstanceStorage;
        $this->queryParameters['DBInstanceStorage'] = $dBInstanceStorage;

        return $this;
    }

    /**
     * @param string $clientToken
     *
     * @return $this
     */
    public function setClientToken($clientToken)
    {
        $this->requestParameters['ClientToken'] = $clientToken;
        $this->queryParameters['ClientToken'] = $clientToken;

        return $this;
    }

    /**
     * @param string $engineVersion
     *
     * @return $this
     */
    public function setEngineVersion($engineVersion)
    {
        $this->requestParameters['EngineVersion'] = $engineVersion;
        $this->queryParameters['EngineVersion'] = $engineVersion;

        return $this;
    }

    /**
     * @param string $uid
     *
     * @return $this
     */
    public function setuid($uid)
    {
        $this->requestParameters['uid'] = $uid;
        $this->queryParameters['uid'] = $uid;

        return $this;
    }

    /**
     * @param string $bidLoginEmail
     *
     * @return $this
     */
    public function setbidLoginEmail($bidLoginEmail)
    {
        $this->requestParameters['bidLoginEmail'] = $bidLoginEmail;
        $this->queryParameters['bidLoginEmail'] = $bidLoginEmail;

        return $this;
    }

    /**
     * @param string $engine
     *
     * @return $this
     */
    public function setEngine($engine)
    {
        $this->requestParameters['Engine'] = $engine;
        $this->queryParameters['Engine'] = $engine;

        return $this;
    }

    /**
     * @param string $uidLoginEmail
     *
     * @return $this
     */
    public function setuidLoginEmail($uidLoginEmail)
    {
        $this->requestParameters['uidLoginEmail'] = $uidLoginEmail;
        $this->queryParameters['uidLoginEmail'] = $uidLoginEmail;

        return $this;
    }

    /**
     * @param string $dBInstanceNetType
     *
     * @return $this
     */
    public function setDBInstanceNetType($dBInstanceNetType)
    {
        $this->requestParameters['DBInstanceNetType'] = $dBInstanceNetType;
        $this->queryParameters['DBInstanceNetType'] = $dBInstanceNetType;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        $this->requestParameters['OwnerAccount'] = $ownerAccount;
        $this->queryParameters['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param string $dBInstanceRemarks
     *
     * @return $this
     */
    public function setDBInstanceRemarks($dBInstanceRemarks)
    {
        $this->requestParameters['DBInstanceRemarks'] = $dBInstanceRemarks;
        $this->queryParameters['DBInstanceRemarks'] = $dBInstanceRemarks;

        return $this;
    }

    /**
     * @param string $dBInstanceClass
     *
     * @return $this
     */
    public function setDBInstanceClass($dBInstanceClass)
    {
        $this->requestParameters['DBInstanceClass'] = $dBInstanceClass;
        $this->queryParameters['DBInstanceClass'] = $dBInstanceClass;

        return $this;
    }

    /**
     * @param string $bid
     *
     * @return $this
     */
    public function setbid($bid)
    {
        $this->requestParameters['bid'] = $bid;
        $this->queryParameters['bid'] = $bid;

        return $this;
    }

    /**
     * @param string $characterSetName
     *
     * @return $this
     */
    public function setCharacterSetName($characterSetName)
    {
        $this->requestParameters['CharacterSetName'] = $characterSetName;
        $this->queryParameters['CharacterSetName'] = $characterSetName;

        return $this;
    }
}
