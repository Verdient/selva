<?php

declare(strict_types=1);

namespace Verdient\Selva\Response\User;

use Verdient\Selva\Response\AbstractResponse;

/**
 * 启用MFA响应
 * @author Verdient。
 */
class EnableMfaResponse extends AbstractResponse
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