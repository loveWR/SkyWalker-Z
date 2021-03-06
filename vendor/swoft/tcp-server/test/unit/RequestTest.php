<?php declare(strict_types=1);

namespace SwoftTest\Tcp\Server\Unit;

use PHPUnit\Framework\TestCase;
use Swoft\Tcp\Server\Request;

/**
 * Class RequestTest
 */
class RequestTest extends TestCase
{
    public function testBasic(): void
    {
        $r = Request::new(1, 'data', 2);

        $this->assertSame(1, $r->getFd());
        $this->assertSame(2, $r->getReactorId());
        $this->assertSame('data', $r->getRawData());
    }
}
