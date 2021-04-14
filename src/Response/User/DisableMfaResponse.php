<?php

declare(strict_types=1);

namespace Verdient\Selva\Response\User;

use Verdient\Selva\Response\AbstractResponse;

/**
 * 禁用MFA响应
 * @author Verdient。
 */
class DisableMfaResponse extends AbstractResponse
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