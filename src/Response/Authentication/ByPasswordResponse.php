<?php

declare(strict_types=1);

namespace Verdient\Selva\Response\Authentication;

use Verdient\http\api\Formatter;
use Verdient\Selva\Response\AbstractResponse;

/**
 * 通过密码认证响应
 * @property string $accessToken 访问令牌
 * @property int $expiredAt 过期时间
 * @author Verdient。
 */
class ByPasswordResponse extends AbstractResponse
{
    /**
     * @inheritdoc
     * @author Verdient。
     */
    protected function attributes(): array
    {
        return [
            'accessToken' => Formatter::STRING,
            'expiredAt' => Formatter::INT
        ];
    }
}