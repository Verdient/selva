<?php

declare(strict_types=1);

namespace Verdient\Selva\Request\User;

use Verdient\http\api\Formatter;
use Verdient\Selva\Request\AbstractRequest;

/**
 * 修改密码请求
 * @property int $id 用户编号
 * @property string $password 密码
 * @author Verdient。
 */
class ChangePasswordRequest extends AbstractRequest
{
    /**
     * @inheritdoc
     * @author Verdient。
     */
    protected function attributes(): array
    {
        return [
            'id' => Formatter::INT,
            'password' => Formatter::STRING
        ];
    }
}