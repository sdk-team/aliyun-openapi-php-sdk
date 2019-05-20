<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeDeploymentSetTopology
 *
 * @method string getResourceOwnerId()
 * @method string getNetworkType()
 * @method string getDeploymentSetId()
 * @method string getResourceOwnerAccount()
 * @method string getDeploymentSetName()
 * @method string getOwnerId()
 * @method string getGranularity()
 * @method string getDomain()
 * @method string getStrategy()
 */
class DescribeDeploymentSetTopologyRequest extends \RpcAcsRequest
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
            '2014-05-26',
            'DescribeDeploymentSetTopology',
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
     * @param string $networkType
     *
     * @return $this
     */
    public function setNetworkType($networkType)
    {
        $this->requestParameters['NetworkType'] = $networkType;
        $this->queryParameters['NetworkType'] = $networkType;

        return $this;
    }

    /**
     * @param string $deploymentSetId
     *
     * @return $this
     */
    public function setDeploymentSetId($deploymentSetId)
    {
        $this->requestParameters['DeploymentSetId'] = $deploymentSetId;
        $this->queryParameters['DeploymentSetId'] = $deploymentSetId;

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
     * @param string $deploymentSetName
     *
     * @return $this
     */
    public function setDeploymentSetName($deploymentSetName)
    {
        $this->requestParameters['DeploymentSetName'] = $deploymentSetName;
        $this->queryParameters['DeploymentSetName'] = $deploymentSetName;

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
     * @param string $granularity
     *
     * @return $this
     */
    public function setGranularity($granularity)
    {
        $this->requestParameters['Granularity'] = $granularity;
        $this->queryParameters['Granularity'] = $granularity;

        return $this;
    }

    /**
     * @param string $domain
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->requestParameters['Domain'] = $domain;
        $this->queryParameters['Domain'] = $domain;

        return $this;
    }

    /**
     * @param string $strategy
     *
     * @return $this
     */
    public function setStrategy($strategy)
    {
        $this->requestParameters['Strategy'] = $strategy;
        $this->queryParameters['Strategy'] = $strategy;

        return $this;
    }
}
