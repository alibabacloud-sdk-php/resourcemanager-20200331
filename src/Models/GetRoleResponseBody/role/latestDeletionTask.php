<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetRoleResponseBody\role;

use AlibabaCloud\Tea\Model;

class latestDeletionTask extends Model
{
    /**
     * @description The time when the deletion task was created.
     *
     * @example 2018-10-23T12:33:18Z
     *
     * @var string
     */
    public $createDate;

    /**
     * @description The ID of the deletion task.
     *
     * @example ECSAdmin/cc61514b-26eb-4453-ab53-b142eb702a3d
     *
     * @var string
     */
    public $deletionTaskId;
    protected $_name = [
        'createDate'     => 'CreateDate',
        'deletionTaskId' => 'DeletionTaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->deletionTaskId) {
            $res['DeletionTaskId'] = $this->deletionTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return latestDeletionTask
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['DeletionTaskId'])) {
            $model->deletionTaskId = $map['DeletionTaskId'];
        }

        return $model;
    }
}
