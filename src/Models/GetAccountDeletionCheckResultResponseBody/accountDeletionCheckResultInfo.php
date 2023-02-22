<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetAccountDeletionCheckResultResponseBody;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetAccountDeletionCheckResultResponseBody\accountDeletionCheckResultInfo\abandonableChecks;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetAccountDeletionCheckResultResponseBody\accountDeletionCheckResultInfo\notAllowReason;
use AlibabaCloud\Tea\Model;

class accountDeletionCheckResultInfo extends Model
{
    /**
     * @var abandonableChecks[]
     */
    public $abandonableChecks;

    /**
     * @example false
     *
     * @var string
     */
    public $allowDelete;

    /**
     * @var notAllowReason[]
     */
    public $notAllowReason;

    /**
     * @example PreCheckComplete
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'abandonableChecks' => 'AbandonableChecks',
        'allowDelete'       => 'AllowDelete',
        'notAllowReason'    => 'NotAllowReason',
        'status'            => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->abandonableChecks) {
            $res['AbandonableChecks'] = [];
            if (null !== $this->abandonableChecks && \is_array($this->abandonableChecks)) {
                $n = 0;
                foreach ($this->abandonableChecks as $item) {
                    $res['AbandonableChecks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->allowDelete) {
            $res['AllowDelete'] = $this->allowDelete;
        }
        if (null !== $this->notAllowReason) {
            $res['NotAllowReason'] = [];
            if (null !== $this->notAllowReason && \is_array($this->notAllowReason)) {
                $n = 0;
                foreach ($this->notAllowReason as $item) {
                    $res['NotAllowReason'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accountDeletionCheckResultInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbandonableChecks'])) {
            if (!empty($map['AbandonableChecks'])) {
                $model->abandonableChecks = [];
                $n                        = 0;
                foreach ($map['AbandonableChecks'] as $item) {
                    $model->abandonableChecks[$n++] = null !== $item ? abandonableChecks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AllowDelete'])) {
            $model->allowDelete = $map['AllowDelete'];
        }
        if (isset($map['NotAllowReason'])) {
            if (!empty($map['NotAllowReason'])) {
                $model->notAllowReason = [];
                $n                     = 0;
                foreach ($map['NotAllowReason'] as $item) {
                    $model->notAllowReason[$n++] = null !== $item ? notAllowReason::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
