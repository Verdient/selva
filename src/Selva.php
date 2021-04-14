<?php

declare(strict_types=1);

namespace Verdient\Selva;

use chorus\BaseObject;

/**
 * Selva
 * @author Verdient。
 */
class Selva extends BaseObject
{
    /**
     * @var string 主机地址
     * @author Verdient。
     */
    public $host = '127.0.0.1';

    /**
     * @var int 端口
     * @author Verdient。
     */
    public $port = 80;

    /**
     * @var string 签名秘钥
     * @author Verdient。
     */
    public $signKey = '';

    /**
     * @var string 传输通道
     * @author Verdient。
     */
    public $transport = 'cUrl';

    /**
     * 获取用户客户端
     * @author Verdient。
     */
    public function user(){
        return new User($this);
    }

    /**
     * 获取认证客户端
     * @author Verdient。
     */
    public function authentication(){
        return new Authentication($this);
    }
}