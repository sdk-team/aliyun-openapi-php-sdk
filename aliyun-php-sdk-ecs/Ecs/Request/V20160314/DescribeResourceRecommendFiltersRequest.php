<?php

namespace Ecs\Request\V20160314;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeResourceRecommendFilters
 *
 * @method string getResourceOwnerId()
 * @method string getAttributeValue()
 * @method string getGlobal()
 * @method string getAttributeName()
 * @method array getTemplateTags()
 * @method string getProduct()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getResourceType()
 * @method string getRegionNo()
 * @method string getMaxItems()
 */
class DescribeResourceRecommendFiltersRequest extends \RpcAcsRequest
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
            'DescribeResourceRecommendFilters',
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
     * @param string $attributeValue
     *
     * @return $this
     */
    public function setAttributeValue($attributeValue)
    {
        $this->requestParameters['AttributeValue'] = $attributeValue;
        $this->queryParameters['AttributeValue'] = $attributeValue;

        return $this;
    }

    /**
     * @param string $global
     *
     * @return $this
     */
    public function setGlobal($global)
    {
        $this->requestParameters['Global'] = $global;
        $this->queryParameters['Global'] = $global;

        return $this;
    }

    /**
     * @param string $attributeName
     *
     * @return $this
     */
    public function setAttributeName($attributeName)
    {
        $this->requestParameters['AttributeName'] = $attributeName;
        $this->queryParameters['AttributeName'] = $attributeName;

        return $this;
    }

    /**
     * @param array $templateTag
     *
     * @return $this
     */
    public function setTemplateTags(array $templateTag)
    {
        $this->requestParameters['TemplateTags'] = $templateTag;
        foreach ($templateTag as $depth1 => $depth1Value) {
            $this->queryParameters['TemplateTag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
            $this->queryParameters['TemplateTag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
        }

        return $this;
    }

    /**
     * @param string $product
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->requestParameters['Product'] = $product;
        $this->queryParameters['Product'] = $product;

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
     * @param string $resourceType
     *
     * @return $this
     */
    public function setResourceType($resourceType)
    {
        $this->requestParameters['ResourceType'] = $resourceType;
        $this->queryParameters['ResourceType'] = $resourceType;

        return $this;
    }

    /**
     * @param string $regionNo
     *
     * @return $this
     */
    public function setRegionNo($regionNo)
    {
        $this->requestParameters['RegionNo'] = $regionNo;
        $this->queryParameters['RegionNo'] = $regionNo;

        return $this;
    }

    /**
     * @param string $maxItems
     *
     * @return $this
     */
    public function setMaxItems($maxItems)
    {
        $this->requestParameters['MaxItems'] = $maxItems;
        $this->queryParameters['MaxItems'] = $maxItems;

        return $this;
    }
}
