<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListPolicyAttachmentsResponse\policyAttachments;
use AlibabaCloud\Tea\Model;

class ListPolicyAttachmentsResponse extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var policyAttachments
     */
    public $policyAttachments;
    protected $_name = [
        'totalCount'        => 'TotalCount',
        'pageSize'          => 'PageSize',
        'requestId'         => 'RequestId',
        'pageNumber'        => 'PageNumber',
        'policyAttachments' => 'PolicyAttachments',
    ];

    public function validate()
    {
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('policyAttachments', $this->policyAttachments, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->policyAttachments) {
            $res['PolicyAttachments'] = null !== $this->policyAttachments ? $this->policyAttachments->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPolicyAttachmentsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PolicyAttachments'])) {
            $model->policyAttachments = policyAttachments::fromMap($map['PolicyAttachments']);
        }

        return $model;
    }
}
