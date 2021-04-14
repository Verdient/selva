<?php

declare(strict_types=1);

namespace Verdient\Selva\Request\User;

use Verdient\http\api\Formatter;
use Verdient\Selva\Request\AbstractRequest;

/**
 * 启用MFA请求
 * @property int $id 用户编号
 * @author Verdient。
 */
class EnableMfaRequest extends AbstractRequest
{
    /**
     * @inheritdoc
     * @author Verdient。
     */
    protected function attributes(): array
    {
        return [
            'id' => Formatter::INT
        ];
    }
}