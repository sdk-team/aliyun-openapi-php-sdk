<?php

namespace Slb\Request\V20140515;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateRules
 *
 * @method string getaccess_key_id()
 * @method string getResourceOwnerId()
 * @method string getListenerPort()
 * @method string getLoadBalancerId()
 * @method string getResourceOwnerAccount()
 * @method string getRuleList()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 */
class CreateRulesRequest extends \RpcAcsRequest
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
            'Slb',
            '2014-05-15',
            'CreateRules',
            'asdfdsf'
        );
    }

    /**
     * @param string $access_key_id
     *
     * @return $this
     */
    public function setaccess_key_id($access_key_id)
    {
        $this->requestParameters['access_key_id'] = $access_key_id;
        $this->queryParameters['access_key_id'] = $access_key_id;

        return $this;
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
     * @param string $listenerPort
     *
     * @return $this
     */
    public function setListenerPort($listenerPort)
    {
        $this->requestParameters['ListenerPort'] = $listenerPort;
        $this->queryParameters['ListenerPort'] = $listenerPort;

        return $this;
    }

    /**
     * @param string $loadBalancerId
     *
     * @return $this
     */
    public function setLoadBalancerId($loadBalancerId)
    {
        $this->requestParameters['LoadBalancerId'] = $loadBalancerId;
        $this->queryParameters['LoadBalancerId'] = $loadBalancerId;

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
     * @param string $ruleList
     *
     * @return $this
     */
    public function setRuleList($ruleList)
    {
        $this->requestParameters['RuleList'] = $ruleList;
        $this->queryParameters['RuleList'] = $ruleList;

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
}
