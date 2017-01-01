<?php
/**
 * Created by PhpStorm.
 *
 * PHP version 5.6, 7
 *
 * @package Zeravcic\PhpUnit_De\Tests\chapter08
 * @author  Nikola Zeravcic <niks986@gmail.com>
 * @license <http://opensource.org/licenses/gpl-license.php GPL
 * @link    http://nikolazeravcic.iz.rs Personal site
 */

namespace Zeravcic\PhpUnit_De\Tests\chapter08;

// $loader = require __DIR__ . '/../../../../../vendor/autoload.php';

/**
 * Class MyTest
 *
 * @package Zeravcic\PhpUnit_De\Tests\chapter08
 */
class MyTest extends \PHPUnit_Framework_TestCase
{
    public function testCalculate()
    {
        $this->assertEquals(2, 1 + 1);
    }
}