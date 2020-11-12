<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class DeleteServiceLinkedRoleResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $deletionTaskId;
    protected $_name = [
        'requestId'      => 'RequestId',
        'deletionTaskId' => 'DeletionTaskId',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('deletionTaskId', $this->deletionTaskId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->deletionTaskId) {
            $res['DeletionTaskId'] = $this->deletionTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteServiceLinkedRoleResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DeletionTaskId'])) {
            $model->deletionTaskId = $map['DeletionTaskId'];
        }

        return $model;
    }
}
