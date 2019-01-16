<?php
declare(strict_types=1);

namespace DrdPlus\Tests\WebVersions;

use DrdPlus\WebVersions\WebVersions;
use Granam\Git\Git;
use PHPUnit\Framework\TestCase;

class WebVersionsTest extends TestCase
{
    /**
     * @test
     */
    public function I_can_get_last_unstable_version(): void
    {
        $webVersions = new WebVersions(new Git(), 'foo');
        self::assertSame('master', $webVersions->getLastUnstableVersion(), 'Expected master as a default unstable version');
        $webVersions = new WebVersions(new Git(), 'foo', 'bar');
        self::assertSame('bar', $webVersions->getLastUnstableVersion(), 'Expected given last unstable version to be given back');
    }
}