<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CreateServiceLinkedRoleResponseBody\role;
use AlibabaCloud\Tea\Model;

class CreateServiceLinkedRoleResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example FE58D7CF-03BC-432A-B42D-BC3390C8C2E1
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the role.
     *
     * @var role
     */
    public $role;
    protected $_name = [
        'requestId' => 'RequestId',
        'role'      => 'Role',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->role) {
            $res['Role'] = null !== $this->role ? $this->role->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateServiceLinkedRoleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Role'])) {
            $model->role = role::fromMap($map['Role']);
        }

        return $model;
    }
}
