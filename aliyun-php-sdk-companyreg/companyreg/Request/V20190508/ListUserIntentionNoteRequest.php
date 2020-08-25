<?php

namespace companyreg\Request\V20190508;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListUserIntentionNote
 *
 * @method string getPageSize()
 * @method string getIntentionBizId()
 * @method string getPageNum()
 */
class ListUserIntentionNoteRequest extends \RpcAcsRequest
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
            'companyreg',
            '2019-05-08',
            'ListUserIntentionNote'
        );
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->requestParameters['PageSize'] = $pageSize;
        $this->queryParameters['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $intentionBizId
     *
     * @return $this
     */
    public function setIntentionBizId($intentionBizId)
    {
        $this->requestParameters['IntentionBizId'] = $intentionBizId;
        $this->queryParameters['IntentionBizId'] = $intentionBizId;

        return $this;
    }

    /**
     * @param string $pageNum
     *
     * @return $this
     */
    public function setPageNum($pageNum)
    {
        $this->requestParameters['PageNum'] = $pageNum;
        $this->queryParameters['PageNum'] = $pageNum;

        return $this;
    }
}
