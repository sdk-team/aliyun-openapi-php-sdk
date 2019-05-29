<?php

namespace Rds\Request\V20140815;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyFCTrigger
 *
 * @method string getResourceOwnerId()
 * @method string getTriggerId()
 * @method array getSubscriptionObjectss()
 * @method string getSecurityToken()
 * @method string getEventFormat()
 * @method string getRetry()
 * @method string getTriggerArn()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getConcurrency()
 * @method string getInvocationRoleArn()
 * @method string getFunctionArn()
 */
class ModifyFCTriggerRequest extends \RpcAcsRequest
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
            'ModifyFCTrigger',
            'rds'
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
     * @param string $triggerId
     *
     * @return $this
     */
    public function setTriggerId($triggerId)
    {
        $this->requestParameters['TriggerId'] = $triggerId;
        $this->queryParameters['TriggerId'] = $triggerId;

        return $this;
    }

    /**
     * @param array $subscriptionObjects
     *
     * @return $this
     */
    public function setSubscriptionObjectss(array $subscriptionObjects)
    {
        $this->requestParameters['SubscriptionObjectss'] = $subscriptionObjects;
        foreach ($subscriptionObjects as $i => $iValue) {
            $this->queryParameters['SubscriptionObjects.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        $this->requestParameters['SecurityToken'] = $securityToken;
        $this->queryParameters['SecurityToken'] = $securityToken;

        return $this;
    }

    /**
     * @param string $eventFormat
     *
     * @return $this
     */
    public function setEventFormat($eventFormat)
    {
        $this->requestParameters['EventFormat'] = $eventFormat;
        $this->queryParameters['EventFormat'] = $eventFormat;

        return $this;
    }

    /**
     * @param string $retry
     *
     * @return $this
     */
    public function setRetry($retry)
    {
        $this->requestParameters['Retry'] = $retry;
        $this->queryParameters['Retry'] = $retry;

        return $this;
    }

    /**
     * @param string $triggerArn
     *
     * @return $this
     */
    public function setTriggerArn($triggerArn)
    {
        $this->requestParameters['TriggerArn'] = $triggerArn;
        $this->queryParameters['TriggerArn'] = $triggerArn;

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

    /**
     * @param string $concurrency
     *
     * @return $this
     */
    public function setConcurrency($concurrency)
    {
        $this->requestParameters['Concurrency'] = $concurrency;
        $this->queryParameters['Concurrency'] = $concurrency;

        return $this;
    }

    /**
     * @param string $invocationRoleArn
     *
     * @return $this
     */
    public function setInvocationRoleArn($invocationRoleArn)
    {
        $this->requestParameters['InvocationRoleArn'] = $invocationRoleArn;
        $this->queryParameters['InvocationRoleArn'] = $invocationRoleArn;

        return $this;
    }

    /**
     * @param string $functionArn
     *
     * @return $this
     */
    public function setFunctionArn($functionArn)
    {
        $this->requestParameters['FunctionArn'] = $functionArn;
        $this->queryParameters['FunctionArn'] = $functionArn;

        return $this;
    }
}
