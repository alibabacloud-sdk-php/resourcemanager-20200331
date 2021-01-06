<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class GetPayerForAccountResponse extends Model
{
    /**
     * @var string
     */
    public $payerAccountName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $payerAccountId;
    protected $_name = [
        'payerAccountName' => 'PayerAccountName',
        'requestId'        => 'RequestId',
        'payerAccountId'   => 'PayerAccountId',
    ];

    public function validate()
    {
        Model::validateRequired('payerAccountName', $this->payerAccountName, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('payerAccountId', $this->payerAccountId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->payerAccountName) {
            $res['PayerAccountName'] = $this->payerAccountName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->payerAccountId) {
            $res['PayerAccountId'] = $this->payerAccountId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPayerForAccountResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PayerAccountName'])) {
            $model->payerAccountName = $map['PayerAccountName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PayerAccountId'])) {
            $model->payerAccountId = $map['PayerAccountId'];
        }

        return $model;
    }
}
