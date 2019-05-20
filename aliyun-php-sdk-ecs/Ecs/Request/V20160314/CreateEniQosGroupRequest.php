<?php

namespace Ecs\Request\V20160314;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateEniQosGroup
 *
 * @method string getResourceOwnerId()
 * @method string getTx()
 * @method string getRx()
 * @method string getRxPps()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method string getQosGroupName()
 * @method string getInstanceId()
 * @method string getTxPps()
 */
class CreateEniQosGroupRequest extends \RpcAcsRequest
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
            'Ecs',
            '2016-03-14',
            'CreateEniQosGroup',
            'ecs'
        );
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $tx
     *
     * @return $this
     */
    public function setTx($tx)
    {
        $this->requestParameters['Tx'] = $tx;
        $this->queryParameters['Tx'] = $tx;

        return $this;
    }

    /**
     * @param string $rx
     *
     * @return $this
     */
    public function setRx($rx)
    {
        $this->requestParameters['Rx'] = $rx;
        $this->queryParameters['Rx'] = $rx;

        return $this;
    }

    /**
     * @param string $rxPps
     *
     * @return $this
     */
    public function setRxPps($rxPps)
    {
        $this->requestParameters['RxPps'] = $rxPps;
        $this->queryParameters['RxPps'] = $rxPps;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->requestParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->queryParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $qosGroupName
     *
     * @return $this
     */
    public function setQosGroupName($qosGroupName)
    {
        $this->requestParameters['QosGroupName'] = $qosGroupName;
        $this->queryParameters['QosGroupName'] = $qosGroupName;

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
     * @param string $txPps
     *
     * @return $this
     */
    public function setTxPps($txPps)
    {
        $this->requestParameters['TxPps'] = $txPps;
        $this->queryParameters['TxPps'] = $txPps;

        return $this;
    }
}
