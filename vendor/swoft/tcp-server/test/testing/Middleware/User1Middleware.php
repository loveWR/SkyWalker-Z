<?php declare(strict_types=1);

namespace SwoftTest\Tcp\Server\Testing\Middleware;

use Swoft\Bean\Annotation\Mapping\Bean;
use Swoft\Tcp\Server\Contract\MiddlewareInterface;
use Swoft\Tcp\Server\Contract\RequestHandlerInterface;
use Swoft\Tcp\Server\Contract\RequestInterface;
use Swoft\Tcp\Server\Contract\ResponseInterface;

/**
 * Class User1Middleware
 *
 * @Bean()
 */
class User1Middleware implements MiddlewareInterface
{
    /**
     * @param RequestInterface        $request
     * @param RequestHandlerInterface $handler
     *
     * @return ResponseInterface
     */
    public function process(RequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $start = '>user1 ';
        $resp  = $handler->handle($request);

        $resp->setData($start . $resp->getData() . ' user1>');

        return $resp;
    }
}
