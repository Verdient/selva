<?php

declare(strict_types=1);

namespace Verdient\Selva\Response\User;

use Verdient\http\api\Formatter;
use Verdient\Selva\Response\AbstractResponse;

/**
 * 校验密码响应
 * @property bool $isValid 是否有效
 * @author Verdient。
 */
class ValidatePasswordResponse extends AbstractResponse
{
    /**
     * @inheritdoc
     * @author Verdient。
     */
    protected function attributes(): array
    {
        return [
            'isValid' => Formatter::BOOLEAN
        ];
    }
}