<?php
/**
 * Created by PhpStorm.
 *
 * PHP version 5.6, 7
 *
 * @package Zeravcic\PhpUnit_De\Tests\chapter09
 * @author  Nikola Zeravcic <niks986@gmail.com>
 * @license <http://opensource.org/licenses/gpl-license.php GPL
 * @link    http://nikolazeravcic.iz.rs Personal site
 */

namespace Zeravcic\PhpUnit_De\Tests\chapter09;

use PHPUnit\Framework\TestCase;

/**
 * Class Foo3Test
 *
 * @package Zeravcic\PhpUnit_De\Tests\chapter09
 */
class Foo3Test extends TestCase
{
    public function testIdenticalObjectPassed()
    {
        $cloneArguments = true;

        $mock = $this->getMockBuilder(stdClass::class)
            ->enableArgumentCloning()
            ->getMock();

        // now your mock clones parameters so the identicalTo constraint
        // will fail.
    }
}
