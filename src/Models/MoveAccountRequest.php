<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class MoveAccountRequest extends Model
{
    /**
     * @example 12323344****
     *
     * @var string
     */
    public $accountId;

    /**
     * @example fd-bVaRIG****
     *
     * @var string
     */
    public $destinationFolderId;
    protected $_name = [
        'accountId'           => 'AccountId',
        'destinationFolderId' => 'DestinationFolderId',
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
        if (null !== $this->destinationFolderId) {
            $res['DestinationFolderId'] = $this->destinationFolderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MoveAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['DestinationFolderId'])) {
            $model->destinationFolderId = $map['DestinationFolderId'];
        }

        return $model;
    }
}
