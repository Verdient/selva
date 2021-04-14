<?php

declare(strict_types=1);

namespace Verdient\Selva\Response\User;

use Verdient\Selva\Response\AbstractResponse;

/**
 * 修改密码响应
 * @author Verdient。
 */
class ChangePasswordResponse extends AbstractResponse
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