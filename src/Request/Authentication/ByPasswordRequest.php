<?php

declare(strict_types=1);

namespace Verdient\Selva\Request\Authentication;

use Verdient\http\api\Formatter;
use Verdient\Selva\Request\AbstractRequest;

/**
 * 通过密码认证请求
 * @property string $username 用户名
 * @property string $password 密码
 * @author Verdient。
 */
class ByPasswordRequest extends AbstractRequest
{
    /**
     * @inheritdoc
     * @author Verdinet。
     */
    protected function attributes(): array
    {
        return [
            'username' => Formatter::STRING,
            'password' => Formatter::STRING
        ];
    }
}