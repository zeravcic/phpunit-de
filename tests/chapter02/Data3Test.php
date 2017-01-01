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
// require __DIR__ . '/CsvFileIterator.php';

class Data3Test extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testAdd($a, $b, $expected)
    {
        $this->assertEquals($expected, $a + $b);
    }

    public function additionProvider()
    {
        return new CsvFileIterator(__DIR__ . '/data.csv');
    }
}

// PHP-CGI
//$data3test = new Data3Test();
//$additionProvider = $data3test->additionProvider();
//foreach ($additionProvider as $key => $value) {
//    $data3test->testAdd($value[0], $value[1], $value[2]);
//    echo "$value[0], $value[1], $value[2] <br>\n";
//}
