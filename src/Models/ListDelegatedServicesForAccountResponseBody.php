<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListDelegatedServicesForAccountResponseBody\delegatedServices;
use AlibabaCloud\Tea\Model;

class ListDelegatedServicesForAccountResponseBody extends Model
{
    /**
     * @description The trusted services.
     *
     * >  If the value of this parameter is empty, the member is not specified as a delegated administrator account.
     * @var delegatedServices
     */
    public $delegatedServices;

    /**
     * @description The ID of the request.
     *
     * @example D9C03B94-9396-4794-A74B-13DC437556A6
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'delegatedServices' => 'DelegatedServices',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->delegatedServices) {
            $res['DelegatedServices'] = null !== $this->delegatedServices ? $this->delegatedServices->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDelegatedServicesForAccountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DelegatedServices'])) {
            $model->delegatedServices = delegatedServices::fromMap($map['DelegatedServices']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
