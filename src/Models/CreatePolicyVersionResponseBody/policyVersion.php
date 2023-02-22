<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\CreatePolicyVersionResponseBody;

use AlibabaCloud\Tea\Model;

class policyVersion extends Model
{
    /**
     * @example 2015-01-23T12:33:18
     *
     * @var string
     */
    public $createDate;

    /**
     * @example false
     *
     * @var bool
     */
    public $isDefaultVersion;

    /**
     * @example v3
     *
     * @var string
     */
    public $versionId;
    protected $_name = [
        'createDate'       => 'CreateDate',
        'isDefaultVersion' => 'IsDefaultVersion',
        'versionId'        => 'VersionId',
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
        if (null !== $this->isDefaultVersion) {
            $res['IsDefaultVersion'] = $this->isDefaultVersion;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policyVersion
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['IsDefaultVersion'])) {
            $model->isDefaultVersion = $map['IsDefaultVersion'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
