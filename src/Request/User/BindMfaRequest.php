<?php

declare(strict_types=1);

namespace Verdient\Selva\Request\User;

use Verdient\http\api\Formatter;
use Verdient\Selva\Request\AbstractRequest;

/**
 * 绑定MFA请求
 * @property int $id 用户编号
 * @property int $captcha 验证码
 * @author Verdient。
 */
class BindMfaRequest extends AbstractRequest
{
    /**
     * @inheritdoc
     * @author Verdient。
     */
    protected function attributes(): array
    {
        return [
            'id' => Formatter::INT,
            'captcha' => Formatter::INT
        ];
    }
}