<?php

declare(strict_types=1);

namespace Verdient\Selva\Request\Authentication;

use Verdient\http\api\Formatter;
use Verdient\Selva\Request\AbstractRequest;

/**
 * 令牌是否有效请求
 * @property string $token 令牌
 * @author Verdient。
 */
class IsActiveRequest extends AbstractRequest
{
    /**
     * @inheritdoc
     * @author Verdient。
     */
    protected function attributes(): array
    {
        return ['token' => Formatter::STRING];
    }
}