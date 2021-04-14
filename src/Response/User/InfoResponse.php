<?php

declare(strict_types=1);

namespace Verdient\Selva\Response\User;

use Verdient\http\api\Formatter;
use Verdient\Selva\Response\AbstractResponse;

/**
 * 用户信息响应
 * @property int $id 用户编号
 * @property int $status 用户状态
 * @property string $username 用户名
 * @property string $display_name 显示名称
 * @property bool $mfa_enabled 是否已启用MFA
 * @property bool $mfa_status 是否已绑定MFA
 * @property bool $mfa_secret MFA秘钥
 * @property bool $reset_password 是否需要在下次登录时重置密码
 * @property string $email 电子邮箱
 * @property string $remark 备注
 * @property int $last_login_at 最后一次的登录时间
 * @property int $created_at 创建时间
 * @property int $updated_at 更新时间
 * @author Verdient。
 */
class InfoResponse extends AbstractResponse
{
    /**
     * @inheritdoc
     * @author Verdient。
     */
    protected function attributes(): array
    {
        return [
            'id' => Formatter::INT,
            'status' => Formatter::INT,
            'username' => Formatter::STRING,
            'display_name' => Formatter::STRING,
            'mfa_enabled' => Formatter::BOOLEAN,
            'mfa_status' => Formatter::BOOLEAN,
            'mfa_secret' => Formatter::STRING,
            'reset_password' => Formatter::BOOLEAN,
            'email' => Formatter::STRING,
            'remark' => Formatter::STRING,
            'last_login_at' => Formatter::INT,
            'created_at' => Formatter::INT,
            'updated_at' => Formatter::INT
        ];
    }
}