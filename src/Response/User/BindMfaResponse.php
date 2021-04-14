<?php

declare(strict_types=1);

namespace Verdient\Selva\Response\User;

use Verdient\Selva\Response\AbstractResponse;

/**
 * 绑定MFA响应
 * @author Verdient。
 */
class BindMfaResponse extends AbstractResponse
{
    /**
     * @inheritdoc
     * @author Verdient。
     */
    protected function attributes(): array
    {
        return [];
    }
}