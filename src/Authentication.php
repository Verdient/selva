<?php

declare(strict_types=1);

namespace Verdient\Selva;

use Verdient\Selva\Request\Authentication\ByPasswordRequest;
use Verdient\Selva\Request\Authentication\IsActiveRequest;
use Verdient\Selva\Response\Authentication\ByPasswordResponse;
use Verdient\Selva\Response\Authentication\IsActiveResponse;

/**
 * 认证
 * @author Verdient。
 */
class Authentication extends AbstractClient
{
    /**
     * 通过密码认证
     * @return ByPasswordResponse
     * @author Verdient。
     */
    public function byPassword(ByPasswordRequest $request){
        return new ByPasswordResponse($this
            ->prepareRequest('byPassword', 'POST')
            ->setBody($request->toArray())
            ->send());
    }

    /**
     * 判断令牌是否有效
     * @return IsActiveResponse
     * @author Verdient。
     */
    public function isActive(IsActiveRequest $request){
        return new IsActiveResponse($this
            ->prepareRequest('isActive', 'GET')
            ->setQuery($request->toArray())
            ->send());
    }
}