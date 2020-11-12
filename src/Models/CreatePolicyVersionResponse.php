<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CreatePolicyVersionResponse\policyVersion;
use AlibabaCloud\Tea\Model;

class CreatePolicyVersionResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var policyVersion
     */
    public $policyVersion;
    protected $_name = [
        'requestId'     => 'RequestId',
        'policyVersion' => 'PolicyVersion',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('policyVersion', $this->policyVersion, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->policyVersion) {
            $res['PolicyVersion'] = null !== $this->policyVersion ? $this->policyVersion->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePolicyVersionResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PolicyVersion'])) {
            $model->policyVersion = policyVersion::fromMap($map['PolicyVersion']);
        }

        return $model;
    }
}
