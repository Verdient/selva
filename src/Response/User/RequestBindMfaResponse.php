<?php

declare(strict_types=1);

namespace Verdient\Selva\Response\User;

use Verdient\http\api\Formatter;
use Verdient\Selva\Response\AbstractResponse;

/**
 * 请求绑定MFA响应
 * @property string $secret 秘钥
 * @property string $uri 绑定URI
 * @author Verdient。
 */
class RequestBindMfaResponse extends AbstractResponse
{
    /**
     * @inheritdoc
     * @author Verdient。
     */
    protected function attributes(): array
    {
        return [
            'secret' => Formatter::STRING,
            'uri' => Formatter::STRING
        ];
    }
}