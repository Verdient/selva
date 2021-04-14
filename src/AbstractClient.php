<?php

declare(strict_types=1);

namespace Verdient\Selva;

/**
 * 抽象客户端
 * @author Verdient。
 */
abstract class AbstractClient extends \Verdient\http\component\Component
{
    /**
     * @var string 秘钥
     * @author Verdient。
     */
    public $signKey = null;

    /**
     * @var string 传输通道
     * @author Verdient。
     */
    public $transport = null;

    /**
     * @param Selva $selva Selva组件
     * @author Verdient。
     */
    public function __construct(Selva $selva){
        parent::__construct([
            'host' => $selva->host,
            'port' => $selva->port,
            'signKey' => $selva->signKey,
            'transport' => $selva->transport
        ]);
    }

    /**
     * @inheritdoc
     * @author Verdient。
     */
    public function getUrl($name){
        if(isset($this->_requestUrl[$name])){
            return $this->_requestUrl[$name];
        }
        return $this->getRequestPath() . '/' . lcfirst(basename(str_replace('\\', '/', static::class))) . '/' . $name;
    }

    /**
     * @inheritdoc
     * @author Verdient。
     */
    public static function requestClass(){
        return Request::class;
    }

    /**
     * @inheritdoc
     * @author Verdient。
     */
    public function prepareRequest($name, $method = 'POST'){;
        $request = parent::prepareRequest($name, $method = 'POST');
        $request->transport = $this->transport;
        return $request;
    }
}