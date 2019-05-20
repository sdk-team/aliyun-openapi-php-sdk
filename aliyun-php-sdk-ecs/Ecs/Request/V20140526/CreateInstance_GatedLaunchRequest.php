<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateInstance_GatedLaunch
 *
 * @method string getDataDisk3Size()
 * @method string getResourceOwnerId()
 * @method string getDataDisk3Category()
 * @method string getHostName()
 * @method string getPassword()
 * @method string getDataDisk2SnapshotId()
 * @method string getDataDisk3DiskName()
 * @method string getDataDisk4Size()
 * @method array getTags()
 * @method string getNodeControllerId()
 * @method string getPeriod()
 * @method string getOwnerId()
 * @method string getDataDisk2DeleteWithInstance()
 * @method string getVSwitchId()
 * @method string getPrivateIpAddress()
 * @method string getSpotStrategy()
 * @method string getInstanceName()
 * @method string getDataDisk3DeleteWithInstance()
 * @method string getInternetChargeType()
 * @method string getDataDisk3Device()
 * @method string getZoneId()
 * @method string getDataDisk4DeleteWithInstance()
 * @method string getDataDisk2DiskName()
 * @method string getInternetMaxBandwidthIn()
 * @method string getDataDisk1DeleteWithInstance()
 * @method string getUseAdditionalService()
 * @method string getImageId()
 * @method string getDataDisk1SnapshotId()
 * @method string getDataDisk1Device()
 * @method string getClientToken()
 * @method string getVlanId()
 * @method string getDataDisk2Device()
 * @method string getIoOptimized()
 * @method string getSecurityGroupId()
 * @method string getInternetMaxBandwidthOut()
 * @method string getDataDisk4Description()
 * @method string getDescription()
 * @method string getDataDisk1DiskName()
 * @method string getDataDisk3Description()
 * @method string getDataDisk4DiskName()
 * @method string getSystemDiskCategory()
 * @method string getUserData()
 * @method string getDataDisk1Description()
 * @method string getDataDisk4Category()
 * @method string getDataDisk2Description()
 * @method string getInstanceType()
 * @method string getDataDisk2Category()
 * @method string getDataDisk1Size()
 * @method string getInstanceChargeType()
 * @method string getDeploymentSetId()
 * @method string getInnerIpAddress()
 * @method string getDataDisk3SnapshotId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getSystemDiskDiskName()
 * @method string getDataDisk2Size()
 * @method string getClusterId()
 * @method string getDataDisk1Category()
 * @method string getSystemDiskSize()
 * @method string getDataDisk4SnapshotId()
 * @method string getDataDisk4Device()
 * @method string getSystemDiskDescription()
 */
class CreateInstance_GatedLaunchRequest extends \RpcAcsRequest
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
            'CreateInstance_GatedLaunch',
            'ecs'
        );
    }

    /**
     * @param string $dataDisk3Size
     *
     * @return $this
     */
    public function setDataDisk3Size($dataDisk3Size)
    {
        $this->requestParameters['DataDisk3Size'] = $dataDisk3Size;
        $this->queryParameters['DataDisk.3.Size'] = $dataDisk3Size;

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
     * @param string $dataDisk3Category
     *
     * @return $this
     */
    public function setDataDisk3Category($dataDisk3Category)
    {
        $this->requestParameters['DataDisk3Category'] = $dataDisk3Category;
        $this->queryParameters['DataDisk.3.Category'] = $dataDisk3Category;

        return $this;
    }

    /**
     * @param string $hostName
     *
     * @return $this
     */
    public function setHostName($hostName)
    {
        $this->requestParameters['HostName'] = $hostName;
        $this->queryParameters['HostName'] = $hostName;

        return $this;
    }

    /**
     * @param string $password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->requestParameters['Password'] = $password;
        $this->queryParameters['Password'] = $password;

        return $this;
    }

    /**
     * @param string $dataDisk2SnapshotId
     *
     * @return $this
     */
    public function setDataDisk2SnapshotId($dataDisk2SnapshotId)
    {
        $this->requestParameters['DataDisk2SnapshotId'] = $dataDisk2SnapshotId;
        $this->queryParameters['DataDisk.2.SnapshotId'] = $dataDisk2SnapshotId;

        return $this;
    }

    /**
     * @param string $dataDisk3DiskName
     *
     * @return $this
     */
    public function setDataDisk3DiskName($dataDisk3DiskName)
    {
        $this->requestParameters['DataDisk3DiskName'] = $dataDisk3DiskName;
        $this->queryParameters['DataDisk.3.DiskName'] = $dataDisk3DiskName;

        return $this;
    }

    /**
     * @param string $dataDisk4Size
     *
     * @return $this
     */
    public function setDataDisk4Size($dataDisk4Size)
    {
        $this->requestParameters['DataDisk4Size'] = $dataDisk4Size;
        $this->queryParameters['DataDisk.4.Size'] = $dataDisk4Size;

        return $this;
    }

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function setTags(array $tag)
    {
        $this->requestParameters['Tags'] = $tag;
        foreach ($tag as $depth1 => $depth1Value) {
            $this->queryParameters['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->queryParameters['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
        }

        return $this;
    }

    /**
     * @param string $nodeControllerId
     *
     * @return $this
     */
    public function setNodeControllerId($nodeControllerId)
    {
        $this->requestParameters['NodeControllerId'] = $nodeControllerId;
        $this->queryParameters['NodeControllerId'] = $nodeControllerId;

        return $this;
    }

    /**
     * @param string $period
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->requestParameters['Period'] = $period;
        $this->queryParameters['Period'] = $period;

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
     * @param string $dataDisk2DeleteWithInstance
     *
     * @return $this
     */
    public function setDataDisk2DeleteWithInstance($dataDisk2DeleteWithInstance)
    {
        $this->requestParameters['DataDisk2DeleteWithInstance'] = $dataDisk2DeleteWithInstance;
        $this->queryParameters['DataDisk.2.DeleteWithInstance'] = $dataDisk2DeleteWithInstance;

        return $this;
    }

    /**
     * @param string $vSwitchId
     *
     * @return $this
     */
    public function setVSwitchId($vSwitchId)
    {
        $this->requestParameters['VSwitchId'] = $vSwitchId;
        $this->queryParameters['VSwitchId'] = $vSwitchId;

        return $this;
    }

    /**
     * @param string $privateIpAddress
     *
     * @return $this
     */
    public function setPrivateIpAddress($privateIpAddress)
    {
        $this->requestParameters['PrivateIpAddress'] = $privateIpAddress;
        $this->queryParameters['PrivateIpAddress'] = $privateIpAddress;

        return $this;
    }

    /**
     * @param string $spotStrategy
     *
     * @return $this
     */
    public function setSpotStrategy($spotStrategy)
    {
        $this->requestParameters['SpotStrategy'] = $spotStrategy;
        $this->queryParameters['SpotStrategy'] = $spotStrategy;

        return $this;
    }

    /**
     * @param string $instanceName
     *
     * @return $this
     */
    public function setInstanceName($instanceName)
    {
        $this->requestParameters['InstanceName'] = $instanceName;
        $this->queryParameters['InstanceName'] = $instanceName;

        return $this;
    }

    /**
     * @param string $dataDisk3DeleteWithInstance
     *
     * @return $this
     */
    public function setDataDisk3DeleteWithInstance($dataDisk3DeleteWithInstance)
    {
        $this->requestParameters['DataDisk3DeleteWithInstance'] = $dataDisk3DeleteWithInstance;
        $this->queryParameters['DataDisk.3.DeleteWithInstance'] = $dataDisk3DeleteWithInstance;

        return $this;
    }

    /**
     * @param string $internetChargeType
     *
     * @return $this
     */
    public function setInternetChargeType($internetChargeType)
    {
        $this->requestParameters['InternetChargeType'] = $internetChargeType;
        $this->queryParameters['InternetChargeType'] = $internetChargeType;

        return $this;
    }

    /**
     * @param string $dataDisk3Device
     *
     * @return $this
     */
    public function setDataDisk3Device($dataDisk3Device)
    {
        $this->requestParameters['DataDisk3Device'] = $dataDisk3Device;
        $this->queryParameters['DataDisk.3.Device'] = $dataDisk3Device;

        return $this;
    }

    /**
     * @param string $zoneId
     *
     * @return $this
     */
    public function setZoneId($zoneId)
    {
        $this->requestParameters['ZoneId'] = $zoneId;
        $this->queryParameters['ZoneId'] = $zoneId;

        return $this;
    }

    /**
     * @param string $dataDisk4DeleteWithInstance
     *
     * @return $this
     */
    public function setDataDisk4DeleteWithInstance($dataDisk4DeleteWithInstance)
    {
        $this->requestParameters['DataDisk4DeleteWithInstance'] = $dataDisk4DeleteWithInstance;
        $this->queryParameters['DataDisk.4.DeleteWithInstance'] = $dataDisk4DeleteWithInstance;

        return $this;
    }

    /**
     * @param string $dataDisk2DiskName
     *
     * @return $this
     */
    public function setDataDisk2DiskName($dataDisk2DiskName)
    {
        $this->requestParameters['DataDisk2DiskName'] = $dataDisk2DiskName;
        $this->queryParameters['DataDisk.2.DiskName'] = $dataDisk2DiskName;

        return $this;
    }

    /**
     * @param string $internetMaxBandwidthIn
     *
     * @return $this
     */
    public function setInternetMaxBandwidthIn($internetMaxBandwidthIn)
    {
        $this->requestParameters['InternetMaxBandwidthIn'] = $internetMaxBandwidthIn;
        $this->queryParameters['InternetMaxBandwidthIn'] = $internetMaxBandwidthIn;

        return $this;
    }

    /**
     * @param string $dataDisk1DeleteWithInstance
     *
     * @return $this
     */
    public function setDataDisk1DeleteWithInstance($dataDisk1DeleteWithInstance)
    {
        $this->requestParameters['DataDisk1DeleteWithInstance'] = $dataDisk1DeleteWithInstance;
        $this->queryParameters['DataDisk.1.DeleteWithInstance'] = $dataDisk1DeleteWithInstance;

        return $this;
    }

    /**
     * @param string $useAdditionalService
     *
     * @return $this
     */
    public function setUseAdditionalService($useAdditionalService)
    {
        $this->requestParameters['UseAdditionalService'] = $useAdditionalService;
        $this->queryParameters['UseAdditionalService'] = $useAdditionalService;

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
     * @param string $dataDisk1SnapshotId
     *
     * @return $this
     */
    public function setDataDisk1SnapshotId($dataDisk1SnapshotId)
    {
        $this->requestParameters['DataDisk1SnapshotId'] = $dataDisk1SnapshotId;
        $this->queryParameters['DataDisk.1.SnapshotId'] = $dataDisk1SnapshotId;

        return $this;
    }

    /**
     * @param string $dataDisk1Device
     *
     * @return $this
     */
    public function setDataDisk1Device($dataDisk1Device)
    {
        $this->requestParameters['DataDisk1Device'] = $dataDisk1Device;
        $this->queryParameters['DataDisk.1.Device'] = $dataDisk1Device;

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
     * @param string $vlanId
     *
     * @return $this
     */
    public function setVlanId($vlanId)
    {
        $this->requestParameters['VlanId'] = $vlanId;
        $this->queryParameters['VlanId'] = $vlanId;

        return $this;
    }

    /**
     * @param string $dataDisk2Device
     *
     * @return $this
     */
    public function setDataDisk2Device($dataDisk2Device)
    {
        $this->requestParameters['DataDisk2Device'] = $dataDisk2Device;
        $this->queryParameters['DataDisk.2.Device'] = $dataDisk2Device;

        return $this;
    }

    /**
     * @param string $ioOptimized
     *
     * @return $this
     */
    public function setIoOptimized($ioOptimized)
    {
        $this->requestParameters['IoOptimized'] = $ioOptimized;
        $this->queryParameters['IoOptimized'] = $ioOptimized;

        return $this;
    }

    /**
     * @param string $securityGroupId
     *
     * @return $this
     */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->requestParameters['SecurityGroupId'] = $securityGroupId;
        $this->queryParameters['SecurityGroupId'] = $securityGroupId;

        return $this;
    }

    /**
     * @param string $internetMaxBandwidthOut
     *
     * @return $this
     */
    public function setInternetMaxBandwidthOut($internetMaxBandwidthOut)
    {
        $this->requestParameters['InternetMaxBandwidthOut'] = $internetMaxBandwidthOut;
        $this->queryParameters['InternetMaxBandwidthOut'] = $internetMaxBandwidthOut;

        return $this;
    }

    /**
     * @param string $dataDisk4Description
     *
     * @return $this
     */
    public function setDataDisk4Description($dataDisk4Description)
    {
        $this->requestParameters['DataDisk4Description'] = $dataDisk4Description;
        $this->queryParameters['DataDisk.4.Description'] = $dataDisk4Description;

        return $this;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->requestParameters['Description'] = $description;
        $this->queryParameters['Description'] = $description;

        return $this;
    }

    /**
     * @param string $dataDisk1DiskName
     *
     * @return $this
     */
    public function setDataDisk1DiskName($dataDisk1DiskName)
    {
        $this->requestParameters['DataDisk1DiskName'] = $dataDisk1DiskName;
        $this->queryParameters['DataDisk.1.DiskName'] = $dataDisk1DiskName;

        return $this;
    }

    /**
     * @param string $dataDisk3Description
     *
     * @return $this
     */
    public function setDataDisk3Description($dataDisk3Description)
    {
        $this->requestParameters['DataDisk3Description'] = $dataDisk3Description;
        $this->queryParameters['DataDisk.3.Description'] = $dataDisk3Description;

        return $this;
    }

    /**
     * @param string $dataDisk4DiskName
     *
     * @return $this
     */
    public function setDataDisk4DiskName($dataDisk4DiskName)
    {
        $this->requestParameters['DataDisk4DiskName'] = $dataDisk4DiskName;
        $this->queryParameters['DataDisk.4.DiskName'] = $dataDisk4DiskName;

        return $this;
    }

    /**
     * @param string $systemDiskCategory
     *
     * @return $this
     */
    public function setSystemDiskCategory($systemDiskCategory)
    {
        $this->requestParameters['SystemDiskCategory'] = $systemDiskCategory;
        $this->queryParameters['SystemDisk.Category'] = $systemDiskCategory;

        return $this;
    }

    /**
     * @param string $userData
     *
     * @return $this
     */
    public function setUserData($userData)
    {
        $this->requestParameters['UserData'] = $userData;
        $this->queryParameters['UserData'] = $userData;

        return $this;
    }

    /**
     * @param string $dataDisk1Description
     *
     * @return $this
     */
    public function setDataDisk1Description($dataDisk1Description)
    {
        $this->requestParameters['DataDisk1Description'] = $dataDisk1Description;
        $this->queryParameters['DataDisk.1.Description'] = $dataDisk1Description;

        return $this;
    }

    /**
     * @param string $dataDisk4Category
     *
     * @return $this
     */
    public function setDataDisk4Category($dataDisk4Category)
    {
        $this->requestParameters['DataDisk4Category'] = $dataDisk4Category;
        $this->queryParameters['DataDisk.4.Category'] = $dataDisk4Category;

        return $this;
    }

    /**
     * @param string $dataDisk2Description
     *
     * @return $this
     */
    public function setDataDisk2Description($dataDisk2Description)
    {
        $this->requestParameters['DataDisk2Description'] = $dataDisk2Description;
        $this->queryParameters['DataDisk.2.Description'] = $dataDisk2Description;

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
     * @param string $dataDisk2Category
     *
     * @return $this
     */
    public function setDataDisk2Category($dataDisk2Category)
    {
        $this->requestParameters['DataDisk2Category'] = $dataDisk2Category;
        $this->queryParameters['DataDisk.2.Category'] = $dataDisk2Category;

        return $this;
    }

    /**
     * @param string $dataDisk1Size
     *
     * @return $this
     */
    public function setDataDisk1Size($dataDisk1Size)
    {
        $this->requestParameters['DataDisk1Size'] = $dataDisk1Size;
        $this->queryParameters['DataDisk.1.Size'] = $dataDisk1Size;

        return $this;
    }

    /**
     * @param string $instanceChargeType
     *
     * @return $this
     */
    public function setInstanceChargeType($instanceChargeType)
    {
        $this->requestParameters['InstanceChargeType'] = $instanceChargeType;
        $this->queryParameters['InstanceChargeType'] = $instanceChargeType;

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
     * @param string $innerIpAddress
     *
     * @return $this
     */
    public function setInnerIpAddress($innerIpAddress)
    {
        $this->requestParameters['InnerIpAddress'] = $innerIpAddress;
        $this->queryParameters['InnerIpAddress'] = $innerIpAddress;

        return $this;
    }

    /**
     * @param string $dataDisk3SnapshotId
     *
     * @return $this
     */
    public function setDataDisk3SnapshotId($dataDisk3SnapshotId)
    {
        $this->requestParameters['DataDisk3SnapshotId'] = $dataDisk3SnapshotId;
        $this->queryParameters['DataDisk.3.SnapshotId'] = $dataDisk3SnapshotId;

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
     * @param string $systemDiskDiskName
     *
     * @return $this
     */
    public function setSystemDiskDiskName($systemDiskDiskName)
    {
        $this->requestParameters['SystemDiskDiskName'] = $systemDiskDiskName;
        $this->queryParameters['SystemDisk.DiskName'] = $systemDiskDiskName;

        return $this;
    }

    /**
     * @param string $dataDisk2Size
     *
     * @return $this
     */
    public function setDataDisk2Size($dataDisk2Size)
    {
        $this->requestParameters['DataDisk2Size'] = $dataDisk2Size;
        $this->queryParameters['DataDisk.2.Size'] = $dataDisk2Size;

        return $this;
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        $this->requestParameters['ClusterId'] = $clusterId;
        $this->queryParameters['ClusterId'] = $clusterId;

        return $this;
    }

    /**
     * @param string $dataDisk1Category
     *
     * @return $this
     */
    public function setDataDisk1Category($dataDisk1Category)
    {
        $this->requestParameters['DataDisk1Category'] = $dataDisk1Category;
        $this->queryParameters['DataDisk.1.Category'] = $dataDisk1Category;

        return $this;
    }

    /**
     * @param string $systemDiskSize
     *
     * @return $this
     */
    public function setSystemDiskSize($systemDiskSize)
    {
        $this->requestParameters['SystemDiskSize'] = $systemDiskSize;
        $this->queryParameters['SystemDisk.Size'] = $systemDiskSize;

        return $this;
    }

    /**
     * @param string $dataDisk4SnapshotId
     *
     * @return $this
     */
    public function setDataDisk4SnapshotId($dataDisk4SnapshotId)
    {
        $this->requestParameters['DataDisk4SnapshotId'] = $dataDisk4SnapshotId;
        $this->queryParameters['DataDisk.4.SnapshotId'] = $dataDisk4SnapshotId;

        return $this;
    }

    /**
     * @param string $dataDisk4Device
     *
     * @return $this
     */
    public function setDataDisk4Device($dataDisk4Device)
    {
        $this->requestParameters['DataDisk4Device'] = $dataDisk4Device;
        $this->queryParameters['DataDisk.4.Device'] = $dataDisk4Device;

        return $this;
    }

    /**
     * @param string $systemDiskDescription
     *
     * @return $this
     */
    public function setSystemDiskDescription($systemDiskDescription)
    {
        $this->requestParameters['SystemDiskDescription'] = $systemDiskDescription;
        $this->queryParameters['SystemDisk.Description'] = $systemDiskDescription;

        return $this;
    }
}
