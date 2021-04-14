<?php

declare(strict_types=1);

namespace Verdient\Selva\Response\User;

use Verdient\http\api\Formatter;
use Verdient\Selva\Response\AbstractResponse;

/**
 * 创建用户响应
 * @property int $id 用户编号
 * @author Verdient。
 */
class CreateResponse extends AbstractResponse
{
    /**
     * @inheritdoc
     * @author Verdient。
     */
    protected function attributes(): array
    {
        return ['id' => Formatter::INT];
    }
}