<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class GetAccountDeletionCheckResultRequest extends Model
{
    /**
     * @description The ID of the member that you want to delete.
     *
     * @example 179855839641****
     *
     * @var string
     */
    public $accountId;
    protected $_name = [
        'accountId' => 'AccountId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAccountDeletionCheckResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        return $model;
    }
}
