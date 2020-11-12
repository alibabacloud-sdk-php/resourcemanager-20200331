<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class PromoteResourceAccountRequest extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $email;
    protected $_name = [
        'accountId' => 'AccountId',
        'email'     => 'Email',
    ];

    public function validate()
    {
        Model::validateRequired('accountId', $this->accountId, true);
        Model::validateRequired('email', $this->email, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PromoteResourceAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        return $model;
    }
}