<?php

namespace Acs\Request\V20150101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of PutDocTag
 *
 * @method string getContentLength()
 * @method string getProduct()
 * @method string getBodyContent()
 * @method string getTagId()
 * @method string getContentMD5()
 * @method string getContentType()
 * @method string getLanguage()
 * @method string getAccept()
 */
class PutDocTagRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/DocTag/[Product]/[TagId]/[Language]';

    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Acs',
            '2015-01-01',
            'PutDocTag'
        );
    }

    /**
     * @param string $contentLength
     *
     * @return $this
     */
    public function setContentLength($contentLength)
    {
        $this->requestParameters['ContentLength'] = $contentLength;
        $this->headers['Content-Length'] = $contentLength;

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
        $this->pathParameters['Product'] = $product;

        return $this;
    }

    /**
     * @param string $bodyContent
     *
     * @return $this
     */
    public function setBodyContent($bodyContent)
    {
        $this->requestParameters['BodyContent'] = $bodyContent;
        $this->queryParameters['BodyContent'] = $bodyContent;

        return $this;
    }

    /**
     * @param string $tagId
     *
     * @return $this
     */
    public function setTagId($tagId)
    {
        $this->requestParameters['TagId'] = $tagId;
        $this->pathParameters['TagId'] = $tagId;

        return $this;
    }

    /**
     * @param string $contentMD5
     *
     * @return $this
     */
    public function setContentMD5($contentMD5)
    {
        $this->requestParameters['ContentMD5'] = $contentMD5;
        $this->headers['Content-MD5'] = $contentMD5;

        return $this;
    }

    /**
     * @param string $contentType
     *
     * @return $this
     */
    public function setContentType($contentType)
    {
        $this->requestParameters['ContentType'] = $contentType;
        $this->headers['Content-Type'] = $contentType;

        return $this;
    }

    /**
     * @param string $language
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->requestParameters['Language'] = $language;
        $this->pathParameters['Language'] = $language;

        return $this;
    }

    /**
     * @param string $accept
     *
     * @return $this
     */
    public function setAccept($accept)
    {
        $this->requestParameters['Accept'] = $accept;
        $this->headers['Accept'] = $accept;

        return $this;
    }
}
