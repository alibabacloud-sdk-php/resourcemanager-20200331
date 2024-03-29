<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\MoveResourcesRequest\resources;
use AlibabaCloud\Tea\Model;

class MoveResourcesRequest extends Model
{
    /**
     * @description The ID of the resource group to which you want to move the resources.
     *
     * @example rg-aekzmeobk5w****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The resources that you want to move.
     *
     * >  You can move a maximum of 10 resources at a time. If you want to move more than 10 resources, move them in batches.
     * @var resources[]
     */
    public $resources;
    protected $_name = [
        'resourceGroupId' => 'ResourceGroupId',
        'resources'       => 'Resources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resources) {
            $res['Resources'] = [];
            if (null !== $this->resources && \is_array($this->resources)) {
                $n = 0;
                foreach ($this->resources as $item) {
                    $res['Resources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MoveResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Resources'])) {
            if (!empty($map['Resources'])) {
                $model->resources = [];
                $n                = 0;
                foreach ($map['Resources'] as $item) {
                    $model->resources[$n++] = null !== $item ? resources::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
