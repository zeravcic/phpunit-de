<?php
/**
 * Created by PhpStorm.
 *
 * PHP version 5.6, 7
 *
 * @package Zeravcic\PhpUnit_De\Tests\chapter02
 * @author  Nikola Zeravcic <niks986@gmail.com>
 * @license <http://opensource.org/licenses/gpl-license.php GPL
 * @link    http://nikolazeravcic.iz.rs Personal site
 */

namespace Zeravcic\PhpUnit_De\Tests\chapter02;

// $loader = require __DIR__ . '/../../../../../vendor/autoload.php';

class ArrayWeakComparisonTest extends \PHPUnit_Framework_TestCase
{
    public function testEquality() {
        $this->assertEquals(
            array(1  ,2,3 ,4,5,6),
            array('1',2,33,4,5,6)
        );
    }
}
