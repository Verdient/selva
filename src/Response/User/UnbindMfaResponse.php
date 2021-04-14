<?php

declare(strict_types=1);

namespace Verdient\Selva\Response\User;

use Verdient\Selva\Response\AbstractResponse;

/**
 * 解绑MFA响应
 * @author Verdient。
 */
class UnbindMfaResponse extends AbstractResponse
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