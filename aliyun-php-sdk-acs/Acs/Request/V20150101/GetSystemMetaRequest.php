<?php

namespace Acs\Request\V20150101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetSystemMeta
 *
 * @method string getMetaName()
 * @method string getAccept()
 */
class GetSystemMetaRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/PopSystemMeta/[MetaName]';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Acs',
            '2015-01-01',
            'GetSystemMeta'
        );
    }

    /**
     * @param string $metaName
     *
     * @return $this
     */
    public function setMetaName($metaName)
    {
        $this->requestParameters['MetaName'] = $metaName;
        $this->pathParameters['MetaName'] = $metaName;

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
