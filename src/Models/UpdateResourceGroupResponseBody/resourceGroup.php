<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\UpdateResourceGroupResponseBody;

use AlibabaCloud\Tea\Model;

class resourceGroup extends Model
{
    /**
     * @example 123456789****
     *
     * @var string
     */
    public $accountId;

    /**
     * @example 2015-01-23T12:33:18+08:00
     *
     * @var string
     */
    public $createDate;

    /**
     * @example project
     *
     * @var string
     */
    public $displayName;

    /**
     * @example rg-9gLOoK****
     *
     * @var string
     */
    public $id;

    /**
     * @example my-project
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'accountId'   => 'AccountId',
        'createDate'  => 'CreateDate',
        'displayName' => 'DisplayName',
        'id'          => 'Id',
        'name'        => 'Name',
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
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
