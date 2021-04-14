<?php

declare(strict_types=1);

namespace Verdient\Selva;

use Verdient\Selva\Request\User\BindMfaRequest;
use Verdient\Selva\Request\User\ChangePasswordRequest;
use Verdient\Selva\Request\User\CreateRequest;
use Verdient\Selva\Request\User\DisableMfaRequest;
use Verdient\Selva\Request\User\EnableMfaRequest;
use Verdient\Selva\Request\User\GenerateMfaSecretRequest;
use Verdient\Selva\Request\User\InfoRequest;
use Verdient\Selva\Request\User\RequestBindMfaRequest;
use Verdient\Selva\Request\User\UnbindMfaRequest;
use Verdient\Selva\Request\User\ValidateMfaRequest;
use Verdient\Selva\Request\User\ValidatePasswordRequest;
use Verdient\Selva\Response\User\BindMfaResponse;
use Verdient\Selva\Response\User\ChangePasswordResponse;
use Verdient\Selva\Response\User\CreateResponse;
use Verdient\Selva\Response\User\DisableMfaResponse;
use Verdient\Selva\Response\User\EnableMfaResponse;
use Verdient\Selva\Response\User\InfoResponse;
use Verdient\Selva\Response\User\RequestBindMfaResponse;
use Verdient\Selva\Response\User\UnbindMfaResponse;
use Verdient\Selva\Response\User\ValidateMfaResponse;
use Verdient\Selva\Response\User\ValidatePasswordResponse;

/**
 * 用户
 * @author Verdient。
 */
class User extends AbstractClient
{
    /**
     * 创建用户
     * @param
     * @author Verdient。
     */
    public function create(CreateRequest $request){
        return new CreateResponse($this
            ->prepareRequest('create', 'POST')
            ->setBody($request->toArray())
            ->send());
    }

    /**
     * 获取用户信息
     * @param InfoRequest 用户信息请求
     * @return InfoResponse 用户信息响应
     * @author Verdient。
     */
    public function info(InfoRequest $request){
        return new InfoResponse($this
            ->prepareRequest('info', 'GET')
            ->setQuery($request->toArray())
            ->send());
    }

    /**
     * 校验密码
     * @param ValidatePasswordRequest 校验密码请求
     * @return ValidatePasswordResponse 校验密码响应
     * @author Verdient。
     */
    public function validatePassword(ValidatePasswordRequest $request){
        return new ValidatePasswordResponse($this
            ->prepareRequest('validatePassword', 'GET')
            ->setQuery($request->toArray())
            ->send());
    }

    /**
     * 校验密码
     * @param ChangePasswordRequest 校验密码请求
     * @return ChangePasswordResponse 校验密码响应
     * @author Verdient。
     */
    public function changePassword(ChangePasswordRequest $request){
        return new ChangePasswordResponse($this
            ->prepareRequest('changePassword', 'GET')
            ->setQuery($request->toArray())
            ->send());
    }

    /**
     * 请求绑定MFA
     * @param GenerateMfaSecretRequest $request 请求绑定MFA
     * @return RequestBindMfaResponse
     * @author Verdient。
     */
    public function requestBindMfa(RequestBindMfaRequest $request){
        return new RequestBindMfaResponse($this
            ->prepareRequest('requestBindMfa', 'POST')
            ->setBody($request->toArray())
            ->send());
    }

    /**
     * 绑定MFA
     * @param BindMfaRequest $request 绑定MFA请求
     * @return BindMfaResponse
     * @author Verdient。
     */
    public function bindMfa(BindMfaRequest $request){
        return new BindMfaResponse($this
            ->prepareRequest('bindMfa', 'POST')
            ->setBody($request->toArray())
            ->send());
    }

    /**
     * 解绑MFA
     * @param UnbindMfaRequest $request 解绑MFA请求
     * @return UnbindMfaResponse
     * @author Verdient。
     */
    public function unbindMfa(UnbindMfaRequest $request){
        return new UnbindMfaResponse($this
            ->prepareRequest('unbindMfa', 'POST')
            ->setBody($request->toArray())
            ->send());
    }

    /**
     * 校验MFA
     * @param ValidateMfaRequest $request 校验MFA请求
     * @return ValidateMfaResponse
     * @author Verdient。
     */
    public function validateMfa(ValidateMfaRequest $request){
        return new ValidateMfaResponse($this
            ->prepareRequest('validateMfa', 'POST')
            ->setBody($request->toArray())
            ->send());
    }

    /**
     * 启用MFA
     * @param EnableMfaRequest $request 启用MFA请求
     * @return EnableMfaResponse
     * @author Verdient。
     */
    public function enableMfa(EnableMfaRequest $request){
        return new EnableMfaResponse($this
            ->prepareRequest('enableMfa', 'POST')
            ->setBody($request->toArray())
            ->send());
    }

    /**
     * 禁用MFA
     * @param DisableMfaRequest $request 禁用MFA请求
     * @return DisableMfaResponse
     * @author Verdient。
     */
    public function disableMfa(DisableMfaRequest $request){
        return new DisableMfaResponse($this
            ->prepareRequest('disableMfa', 'POST')
            ->setBody($request->toArray())
            ->send());
    }
}