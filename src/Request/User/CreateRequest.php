<?php

declare(strict_types=1);

namespace Verdient\Selva\Request\User;

use Verdient\http\api\Formatter;
use Verdient\Selva\Request\AbstractRequest;

/**
 * 创建用户请求
 * @property string $username 用户名
 * @property string $password 密码
 * @property string $display_name 显示名称
 * @property bool $mfa_enabled 是否启用MFA
 * @property bool $reset_password 是否在登录时需要重置密码
 * @author Verdient。
 */
class CreateRequest extends AbstractRequest
{
    /**
     * @inheritdoc
     * @author Verdient。
     */
    protected function attributes(): array
    {
        return [
            'username' => Formatter::STRING,
            'password' => Formatter::STRING,
            'display_name' => Formatter::STRING,
            'mfa_enabled' => Formatter::BOOLEAN,
            'reset_password' => Formatter::BOOLEAN
        ];
    }
}