<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class UpdateRoleRequest extends Model
{
    /**
     * @var string
     */
    public $roleName;

    /**
     * @var string
     */
    public $newAssumeRolePolicyDocument;

    /**
     * @var int
     */
    public $newMaxSessionDuration;

    /**
     * @var string
     */
    public $newDescription;
    protected $_name = [
        'roleName'                    => 'RoleName',
        'newAssumeRolePolicyDocument' => 'NewAssumeRolePolicyDocument',
        'newMaxSessionDuration'       => 'NewMaxSessionDuration',
        'newDescription'              => 'NewDescription',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }
        if (null !== $this->newAssumeRolePolicyDocument) {
            $res['NewAssumeRolePolicyDocument'] = $this->newAssumeRolePolicyDocument;
        }
        if (null !== $this->newMaxSessionDuration) {
            $res['NewMaxSessionDuration'] = $this->newMaxSessionDuration;
        }
        if (null !== $this->newDescription) {
            $res['NewDescription'] = $this->newDescription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRoleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }
        if (isset($map['NewAssumeRolePolicyDocument'])) {
            $model->newAssumeRolePolicyDocument = $map['NewAssumeRolePolicyDocument'];
        }
        if (isset($map['NewMaxSessionDuration'])) {
            $model->newMaxSessionDuration = $map['NewMaxSessionDuration'];
        }
        if (isset($map['NewDescription'])) {
            $model->newDescription = $map['NewDescription'];
        }

        return $model;
    }
}
