<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyImageSharePermission_GatedLaunch
 *
 * @method string getAddAccount1()
 * @method string getResourceOwnerId()
 * @method string getImageId()
 * @method string getAddAccount9()
 * @method string getAddAccount8()
 * @method string getAddAccount7()
 * @method string getAddAccount6()
 * @method string getAddAccount5()
 * @method string getAddAccount10()
 * @method string getAddAccount4()
 * @method string getAddAccount3()
 * @method string getAddAccount2()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getRemoveAccount1()
 * @method string getRemoveAccount2()
 * @method string getRemoveAccount3()
 * @method string getRemoveAccount4()
 * @method string getOwnerId()
 * @method string getRemoveAccount9()
 * @method string getRemoveAccount5()
 * @method string getRemoveAccount6()
 * @method string getRemoveAccount7()
 * @method string getRemoveAccount8()
 * @method string getRemoveAccount10()
 */
class ModifyImageSharePermission_GatedLaunchRequest extends \RpcAcsRequest
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
            'ModifyImageSharePermission_GatedLaunch'
        );
    }

    /**
     * @param string $addAccount1
     *
     * @return $this
     */
    public function setAddAccount1($addAccount1)
    {
        $this->requestParameters['AddAccount1'] = $addAccount1;
        $this->queryParameters['AddAccount.1'] = $addAccount1;

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
     * @param string $imageId
     *
     * @return $this
     */
    public function setImageId($imageId)
    {
        $this->requestParameters['ImageId'] = $imageId;
        $this->queryParameters['ImageId'] = $imageId;

        return $this;
    }

    /**
     * @param string $addAccount9
     *
     * @return $this
     */
    public function setAddAccount9($addAccount9)
    {
        $this->requestParameters['AddAccount9'] = $addAccount9;
        $this->queryParameters['AddAccount.9'] = $addAccount9;

        return $this;
    }

    /**
     * @param string $addAccount8
     *
     * @return $this
     */
    public function setAddAccount8($addAccount8)
    {
        $this->requestParameters['AddAccount8'] = $addAccount8;
        $this->queryParameters['AddAccount.8'] = $addAccount8;

        return $this;
    }

    /**
     * @param string $addAccount7
     *
     * @return $this
     */
    public function setAddAccount7($addAccount7)
    {
        $this->requestParameters['AddAccount7'] = $addAccount7;
        $this->queryParameters['AddAccount.7'] = $addAccount7;

        return $this;
    }

    /**
     * @param string $addAccount6
     *
     * @return $this
     */
    public function setAddAccount6($addAccount6)
    {
        $this->requestParameters['AddAccount6'] = $addAccount6;
        $this->queryParameters['AddAccount.6'] = $addAccount6;

        return $this;
    }

    /**
     * @param string $addAccount5
     *
     * @return $this
     */
    public function setAddAccount5($addAccount5)
    {
        $this->requestParameters['AddAccount5'] = $addAccount5;
        $this->queryParameters['AddAccount.5'] = $addAccount5;

        return $this;
    }

    /**
     * @param string $addAccount10
     *
     * @return $this
     */
    public function setAddAccount10($addAccount10)
    {
        $this->requestParameters['AddAccount10'] = $addAccount10;
        $this->queryParameters['AddAccount.10'] = $addAccount10;

        return $this;
    }

    /**
     * @param string $addAccount4
     *
     * @return $this
     */
    public function setAddAccount4($addAccount4)
    {
        $this->requestParameters['AddAccount4'] = $addAccount4;
        $this->queryParameters['AddAccount.4'] = $addAccount4;

        return $this;
    }

    /**
     * @param string $addAccount3
     *
     * @return $this
     */
    public function setAddAccount3($addAccount3)
    {
        $this->requestParameters['AddAccount3'] = $addAccount3;
        $this->queryParameters['AddAccount.3'] = $addAccount3;

        return $this;
    }

    /**
     * @param string $addAccount2
     *
     * @return $this
     */
    public function setAddAccount2($addAccount2)
    {
        $this->requestParameters['AddAccount2'] = $addAccount2;
        $this->queryParameters['AddAccount.2'] = $addAccount2;

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
     * @param string $removeAccount1
     *
     * @return $this
     */
    public function setRemoveAccount1($removeAccount1)
    {
        $this->requestParameters['RemoveAccount1'] = $removeAccount1;
        $this->queryParameters['RemoveAccount.1'] = $removeAccount1;

        return $this;
    }

    /**
     * @param string $removeAccount2
     *
     * @return $this
     */
    public function setRemoveAccount2($removeAccount2)
    {
        $this->requestParameters['RemoveAccount2'] = $removeAccount2;
        $this->queryParameters['RemoveAccount.2'] = $removeAccount2;

        return $this;
    }

    /**
     * @param string $removeAccount3
     *
     * @return $this
     */
    public function setRemoveAccount3($removeAccount3)
    {
        $this->requestParameters['RemoveAccount3'] = $removeAccount3;
        $this->queryParameters['RemoveAccount.3'] = $removeAccount3;

        return $this;
    }

    /**
     * @param string $removeAccount4
     *
     * @return $this
     */
    public function setRemoveAccount4($removeAccount4)
    {
        $this->requestParameters['RemoveAccount4'] = $removeAccount4;
        $this->queryParameters['RemoveAccount.4'] = $removeAccount4;

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
     * @param string $removeAccount9
     *
     * @return $this
     */
    public function setRemoveAccount9($removeAccount9)
    {
        $this->requestParameters['RemoveAccount9'] = $removeAccount9;
        $this->queryParameters['RemoveAccount.9'] = $removeAccount9;

        return $this;
    }

    /**
     * @param string $removeAccount5
     *
     * @return $this
     */
    public function setRemoveAccount5($removeAccount5)
    {
        $this->requestParameters['RemoveAccount5'] = $removeAccount5;
        $this->queryParameters['RemoveAccount.5'] = $removeAccount5;

        return $this;
    }

    /**
     * @param string $removeAccount6
     *
     * @return $this
     */
    public function setRemoveAccount6($removeAccount6)
    {
        $this->requestParameters['RemoveAccount6'] = $removeAccount6;
        $this->queryParameters['RemoveAccount.6'] = $removeAccount6;

        return $this;
    }

    /**
     * @param string $removeAccount7
     *
     * @return $this
     */
    public function setRemoveAccount7($removeAccount7)
    {
        $this->requestParameters['RemoveAccount7'] = $removeAccount7;
        $this->queryParameters['RemoveAccount.7'] = $removeAccount7;

        return $this;
    }

    /**
     * @param string $removeAccount8
     *
     * @return $this
     */
    public function setRemoveAccount8($removeAccount8)
    {
        $this->requestParameters['RemoveAccount8'] = $removeAccount8;
        $this->queryParameters['RemoveAccount.8'] = $removeAccount8;

        return $this;
    }

    /**
     * @param string $removeAccount10
     *
     * @return $this
     */
    public function setRemoveAccount10($removeAccount10)
    {
        $this->requestParameters['RemoveAccount10'] = $removeAccount10;
        $this->queryParameters['RemoveAccount.10'] = $removeAccount10;

        return $this;
    }
}
