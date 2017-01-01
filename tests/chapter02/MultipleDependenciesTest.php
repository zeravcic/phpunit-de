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

class MultipleDependenciesTest extends \PHPUnit_Framework_TestCase
{
    public function testProducerFirst()
    {
        $this->assertTrue(true);
        return 'first';
    }

    public function testProducerSecond()
    {
        $this->assertTrue(true);
        return 'second';
    }

    /**
     * @depends testProducerFirst
     * @depends testProducerSecond
     */
    public function testConsumer()
    {
        return $this->assertEquals(
            array('first', 'second'),
            func_get_args()
        );
    }
}


// za PHP-CGI
//$multipleDependenciesTest = new MultipleDependenciesTest();
//$data1 = $multipleDependenciesTest->testProducerFirst();
//$data2 = $multipleDependenciesTest->testProducerSecond();
//
//$nik = $multipleDependenciesTest->testConsumer($data1, $data2);
//var_dump($nik);
