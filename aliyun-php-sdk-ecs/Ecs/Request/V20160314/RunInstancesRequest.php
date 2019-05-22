<?php

namespace Ecs\Request\V20160314;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of RunInstances
 *
 * @method string getResourceOwnerId()
 * @method string getUniqueSuffix()
 * @method string getHpcClusterId()
 * @method string getSecurityEnhancementStrategy()
 * @method string getNetworkType()
 * @method string getKeyPairName()
 * @method string getMinAmount()
 * @method string getSpotPriceLimit()
 * @method string getDeletionProtection()
 * @method string getResourceGroupId()
 * @method string getHostName()
 * @method string getPassword()
 * @method array getTags()
 * @method string getBusinessInfo()
 * @method string getNodeControllerId()
 * @method string getDryRun()
 * @method string getFromApp()
 * @method string getIpv6AddressCount()
 * @method string getMaxAmount()
 * @method string getOwnerId()
 * @method string getCapacityReservationPreference()
 * @method string getVSwitchId()
 * @method string getSpotStrategy()
 * @method string getRecycleBinResourceId()
 * @method string getInstanceName()
 * @method string getInternetChargeType()
 * @method string getZoneId()
 * @method array getIpv6Addresss()
 * @method string getInternetMaxBandwidthIn()
 * @method string getAffinity()
 * @method string getImageId()
 * @method string getClientToken()
 * @method string getSpotInterruptionBehavior()
 * @method string getIoOptimized()
 * @method string getInternetMaxBandwidthOut()
 * @method string getSecurityGroupId()
 * @method string getDescription()
 * @method string getSystemDiskCategory()
 * @method string getCapacityReservationId()
 * @method string getUserData()
 * @method string getPasswordInherit()
 * @method string getInstanceType()
 * @method array getNetworkInterfaces()
 * @method string getDeploymentSetId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getTenancy()
 * @method string getSystemDiskDiskName()
 * @method string getAutoReleaseTime()
 * @method string getRamRoleName()
 * @method string getRelationOrderId()
 * @method string getDedicatedHostId()
 * @method string getClusterId()
 * @method string getCreditSpecification()
 * @method array getSecurityGroupIdss()
 * @method array getDataDisks()
 * @method array getSecurityGroupRules()
 * @method string getSystemDiskSize()
 * @method string getDefaultVpc()
 * @method string getSystemDiskDescription()
 */
class RunInstancesRequest extends \RpcAcsRequest
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
            'RunInstances'
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
     * @param string $uniqueSuffix
     *
     * @return $this
     */
    public function setUniqueSuffix($uniqueSuffix)
    {
        $this->requestParameters['UniqueSuffix'] = $uniqueSuffix;
        $this->queryParameters['UniqueSuffix'] = $uniqueSuffix;

        return $this;
    }

    /**
     * @param string $hpcClusterId
     *
     * @return $this
     */
    public function setHpcClusterId($hpcClusterId)
    {
        $this->requestParameters['HpcClusterId'] = $hpcClusterId;
        $this->queryParameters['HpcClusterId'] = $hpcClusterId;

        return $this;
    }

    /**
     * @param string $securityEnhancementStrategy
     *
     * @return $this
     */
    public function setSecurityEnhancementStrategy($securityEnhancementStrategy)
    {
        $this->requestParameters['SecurityEnhancementStrategy'] = $securityEnhancementStrategy;
        $this->queryParameters['SecurityEnhancementStrategy'] = $securityEnhancementStrategy;

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
     * @param string $keyPairName
     *
     * @return $this
     */
    public function setKeyPairName($keyPairName)
    {
        $this->requestParameters['KeyPairName'] = $keyPairName;
        $this->queryParameters['KeyPairName'] = $keyPairName;

        return $this;
    }

    /**
     * @param string $minAmount
     *
     * @return $this
     */
    public function setMinAmount($minAmount)
    {
        $this->requestParameters['MinAmount'] = $minAmount;
        $this->queryParameters['MinAmount'] = $minAmount;

        return $this;
    }

    /**
     * @param string $spotPriceLimit
     *
     * @return $this
     */
    public function setSpotPriceLimit($spotPriceLimit)
    {
        $this->requestParameters['SpotPriceLimit'] = $spotPriceLimit;
        $this->queryParameters['SpotPriceLimit'] = $spotPriceLimit;

        return $this;
    }

    /**
     * @param string $deletionProtection
     *
     * @return $this
     */
    public function setDeletionProtection($deletionProtection)
    {
        $this->requestParameters['DeletionProtection'] = $deletionProtection;
        $this->queryParameters['DeletionProtection'] = $deletionProtection;

        return $this;
    }

    /**
     * @param string $resourceGroupId
     *
     * @return $this
     */
    public function setResourceGroupId($resourceGroupId)
    {
        $this->requestParameters['ResourceGroupId'] = $resourceGroupId;
        $this->queryParameters['ResourceGroupId'] = $resourceGroupId;

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
     * @param string $businessInfo
     *
     * @return $this
     */
    public function setBusinessInfo($businessInfo)
    {
        $this->requestParameters['BusinessInfo'] = $businessInfo;
        $this->queryParameters['BusinessInfo'] = $businessInfo;

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
     * @param string $dryRun
     *
     * @return $this
     */
    public function setDryRun($dryRun)
    {
        $this->requestParameters['DryRun'] = $dryRun;
        $this->queryParameters['DryRun'] = $dryRun;

        return $this;
    }

    /**
     * @param string $fromApp
     *
     * @return $this
     */
    public function setFromApp($fromApp)
    {
        $this->requestParameters['FromApp'] = $fromApp;
        $this->queryParameters['FromApp'] = $fromApp;

        return $this;
    }

    /**
     * @param string $ipv6AddressCount
     *
     * @return $this
     */
    public function setIpv6AddressCount($ipv6AddressCount)
    {
        $this->requestParameters['Ipv6AddressCount'] = $ipv6AddressCount;
        $this->queryParameters['Ipv6AddressCount'] = $ipv6AddressCount;

        return $this;
    }

    /**
     * @param string $maxAmount
     *
     * @return $this
     */
    public function setMaxAmount($maxAmount)
    {
        $this->requestParameters['MaxAmount'] = $maxAmount;
        $this->queryParameters['MaxAmount'] = $maxAmount;

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
     * @param string $capacityReservationPreference
     *
     * @return $this
     */
    public function setCapacityReservationPreference($capacityReservationPreference)
    {
        $this->requestParameters['CapacityReservationPreference'] = $capacityReservationPreference;
        $this->queryParameters['CapacityReservationPreference'] = $capacityReservationPreference;

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
     * @param string $recycleBinResourceId
     *
     * @return $this
     */
    public function setRecycleBinResourceId($recycleBinResourceId)
    {
        $this->requestParameters['RecycleBinResourceId'] = $recycleBinResourceId;
        $this->queryParameters['RecycleBinResourceId'] = $recycleBinResourceId;

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
     * @param array $ipv6Address
     *
     * @return $this
     */
    public function setIpv6Addresss(array $ipv6Address)
    {
        $this->requestParameters['Ipv6Addresss'] = $ipv6Address;
        foreach ($ipv6Address as $i => $iValue) {
            $this->queryParameters['Ipv6Address.' . ($i + 1)] = $iValue;
        }

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
     * @param string $affinity
     *
     * @return $this
     */
    public function setAffinity($affinity)
    {
        $this->requestParameters['Affinity'] = $affinity;
        $this->queryParameters['Affinity'] = $affinity;

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
     * @param string $spotInterruptionBehavior
     *
     * @return $this
     */
    public function setSpotInterruptionBehavior($spotInterruptionBehavior)
    {
        $this->requestParameters['SpotInterruptionBehavior'] = $spotInterruptionBehavior;
        $this->queryParameters['SpotInterruptionBehavior'] = $spotInterruptionBehavior;

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
     * @param string $capacityReservationId
     *
     * @return $this
     */
    public function setCapacityReservationId($capacityReservationId)
    {
        $this->requestParameters['CapacityReservationId'] = $capacityReservationId;
        $this->queryParameters['CapacityReservationId'] = $capacityReservationId;

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
     * @param string $passwordInherit
     *
     * @return $this
     */
    public function setPasswordInherit($passwordInherit)
    {
        $this->requestParameters['PasswordInherit'] = $passwordInherit;
        $this->queryParameters['PasswordInherit'] = $passwordInherit;

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
     * @param array $networkInterface
     *
     * @return $this
     */
    public function setNetworkInterfaces(array $networkInterface)
    {
        $this->requestParameters['NetworkInterfaces'] = $networkInterface;
        foreach ($networkInterface as $depth1 => $depth1Value) {
            $this->queryParameters['NetworkInterface.' . ($depth1 + 1) . '.VSwitchId'] = $depth1Value['VSwitchId'];
            $this->queryParameters['NetworkInterface.' . ($depth1 + 1) . '.SecurityGroupId'] = $depth1Value['SecurityGroupId'];
            $this->queryParameters['NetworkInterface.' . ($depth1 + 1) . '.PrimaryIpAddress'] = $depth1Value['PrimaryIpAddress'];
            $this->queryParameters['NetworkInterface.' . ($depth1 + 1) . '.Description'] = $depth1Value['Description'];
            $this->queryParameters['NetworkInterface.' . ($depth1 + 1) . '.NetworkInterfaceName'] = $depth1Value['NetworkInterfaceName'];
        }

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
     * @param string $tenancy
     *
     * @return $this
     */
    public function setTenancy($tenancy)
    {
        $this->requestParameters['Tenancy'] = $tenancy;
        $this->queryParameters['Tenancy'] = $tenancy;

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
     * @param string $autoReleaseTime
     *
     * @return $this
     */
    public function setAutoReleaseTime($autoReleaseTime)
    {
        $this->requestParameters['AutoReleaseTime'] = $autoReleaseTime;
        $this->queryParameters['AutoReleaseTime'] = $autoReleaseTime;

        return $this;
    }

    /**
     * @param string $ramRoleName
     *
     * @return $this
     */
    public function setRamRoleName($ramRoleName)
    {
        $this->requestParameters['RamRoleName'] = $ramRoleName;
        $this->queryParameters['RamRoleName'] = $ramRoleName;

        return $this;
    }

    /**
     * @param string $relationOrderId
     *
     * @return $this
     */
    public function setRelationOrderId($relationOrderId)
    {
        $this->requestParameters['RelationOrderId'] = $relationOrderId;
        $this->queryParameters['RelationOrderId'] = $relationOrderId;

        return $this;
    }

    /**
     * @param string $dedicatedHostId
     *
     * @return $this
     */
    public function setDedicatedHostId($dedicatedHostId)
    {
        $this->requestParameters['DedicatedHostId'] = $dedicatedHostId;
        $this->queryParameters['DedicatedHostId'] = $dedicatedHostId;

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
     * @param string $creditSpecification
     *
     * @return $this
     */
    public function setCreditSpecification($creditSpecification)
    {
        $this->requestParameters['CreditSpecification'] = $creditSpecification;
        $this->queryParameters['CreditSpecification'] = $creditSpecification;

        return $this;
    }

    /**
     * @param array $securityGroupIds
     *
     * @return $this
     */
    public function setSecurityGroupIdss(array $securityGroupIds)
    {
        $this->requestParameters['SecurityGroupIdss'] = $securityGroupIds;
        foreach ($securityGroupIds as $i => $iValue) {
            $this->queryParameters['SecurityGroupIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $dataDisk
     *
     * @return $this
     */
    public function setDataDisks(array $dataDisk)
    {
        $this->requestParameters['DataDisks'] = $dataDisk;
        foreach ($dataDisk as $depth1 => $depth1Value) {
            $this->queryParameters['DataDisk.' . ($depth1 + 1) . '.DiskName'] = $depth1Value['DiskName'];
            $this->queryParameters['DataDisk.' . ($depth1 + 1) . '.SnapshotId'] = $depth1Value['SnapshotId'];
            $this->queryParameters['DataDisk.' . ($depth1 + 1) . '.Size'] = $depth1Value['Size'];
            $this->queryParameters['DataDisk.' . ($depth1 + 1) . '.Encrypted'] = $depth1Value['Encrypted'];
            $this->queryParameters['DataDisk.' . ($depth1 + 1) . '.Description'] = $depth1Value['Description'];
            $this->queryParameters['DataDisk.' . ($depth1 + 1) . '.Category'] = $depth1Value['Category'];
            $this->queryParameters['DataDisk.' . ($depth1 + 1) . '.KMSKeyId'] = $depth1Value['KMSKeyId'];
            $this->queryParameters['DataDisk.' . ($depth1 + 1) . '.Device'] = $depth1Value['Device'];
            $this->queryParameters['DataDisk.' . ($depth1 + 1) . '.DeleteWithInstance'] = $depth1Value['DeleteWithInstance'];
        }

        return $this;
    }

    /**
     * @param array $securityGroupRule
     *
     * @return $this
     */
    public function setSecurityGroupRules(array $securityGroupRule)
    {
        $this->requestParameters['SecurityGroupRules'] = $securityGroupRule;
        foreach ($securityGroupRule as $depth1 => $depth1Value) {
            $this->queryParameters['SecurityGroupRule.' . ($depth1 + 1) . '.NicType'] = $depth1Value['NicType'];
            $this->queryParameters['SecurityGroupRule.' . ($depth1 + 1) . '.PortRange'] = $depth1Value['PortRange'];
            $this->queryParameters['SecurityGroupRule.' . ($depth1 + 1) . '.IpProtocol'] = $depth1Value['IpProtocol'];
            $this->queryParameters['SecurityGroupRule.' . ($depth1 + 1) . '.Priority'] = $depth1Value['Priority'];
            $this->queryParameters['SecurityGroupRule.' . ($depth1 + 1) . '.Policy'] = $depth1Value['Policy'];
        }

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
     * @param string $defaultVpc
     *
     * @return $this
     */
    public function setDefaultVpc($defaultVpc)
    {
        $this->requestParameters['DefaultVpc'] = $defaultVpc;
        $this->queryParameters['DefaultVpc'] = $defaultVpc;

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
