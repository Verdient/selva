<?php

declare(strict_types=1);

namespace Verdient\Selva\Response\Authentication;

use Verdient\http\api\Formatter;
use Verdient\Selva\Response\AbstractResponse;

/**
 * 令牌是否有效响应
 * @property bool $isActive 是否有效
 * @property int $id 所属用户编号
 * @author Verdient。
 */
class IsActiveResponse extends AbstractResponse
{
    /**
     * @inheritdoc
     * @author Verdient。
     */
    protected function attributes(): array
    {
        return [
            'isActive' => Formatter::BOOLEAN,
            'id' => Formatter::STRING
        ];
    }
}