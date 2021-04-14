<?php

declare(strict_types=1);

namespace Verdient\Selva\Request\User;

use Verdient\http\api\Formatter;
use Verdient\Selva\Request\AbstractRequest;

/**
 * 校验密码请求
 * @var int $id 用户编号
 * @author Verdient。
 */
class ValidatePasswordRequest extends AbstractRequest
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