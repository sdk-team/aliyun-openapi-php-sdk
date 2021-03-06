<?php

namespace Acs\Request\V20150101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteTairCache
 *
 * @method string getxacscachekey()
 * @method string getAccept()
 */
class DeleteTairCacheRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/TairCache';

    /**
     * @var string
     */
    protected $method = 'DELETE';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Acs',
            '2015-01-01',
            'DeleteTairCache'
        );
    }

    /**
     * @param string $xacscachekey
     *
     * @return $this
     */
    public function setxacscachekey($xacscachekey)
    {
        $this->requestParameters['xacscachekey'] = $xacscachekey;
        $this->headers['x-acs-cache-key'] = $xacscachekey;

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
