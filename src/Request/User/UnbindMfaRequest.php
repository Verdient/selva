<?php

declare(strict_types=1);

namespace Verdient\Selva\Request\User;

use Verdient\http\api\Formatter;
use Verdient\Selva\Request\AbstractRequest;

/**
 * 解绑MFA请求
 * @property int $id 用户编号
 * @author Verdient。
 */
class UnbindMfaRequest extends AbstractRequest
{
    /**
     * @inheritdoc
     * @author Verdient。
     */
    protected function attributes(): array
    {
        return [
            'id' => Formatter::INT,
        ];
    }
}