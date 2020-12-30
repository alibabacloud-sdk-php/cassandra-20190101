<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models;

use AlibabaCloud\Tea\Model;

class ModifyIpWhitelistRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $ipList;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'ipList'    => 'IpList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->ipList) {
            $res['IpList'] = $this->ipList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyIpWhitelistRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['IpList'])) {
            $model->ipList = $map['IpList'];
        }

        return $model;
    }
}
