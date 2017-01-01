<?php
/**
 * Created by PhpStorm.
 *
 * PHP version 5.6, 7
 *
 * @package Zeravcic\PhpUnit_De\Tests\chapter04
 * @author  Nikola Zeravcic <niks986@gmail.com>
 * @license <http://opensource.org/licenses/gpl-license.php GPL
 * @link    http://nikolazeravcic.iz.rs Personal site
 */

namespace Zeravcic\PhpUnit_De\Tests\chapter04;

// $loader = require __DIR__ . '/../../../../../vendor/autoload.php';

class TemplateMethodsTest extends \PHPUnit_Framework_TestCase
{
    public static function setUpBeforeClass()
    {
        fwrite(STDOUT, __METHOD__ . "\n");
    }

    protected function setUp()
    {
        fwrite(STDOUT, __METHOD__ . "\n");
    }

    protected function assertPreConditions()
    {
        fwrite(STDOUT, __METHOD__ . "\n");
    }

    public function testOne()
    {
        fwrite(STDOUT, __METHOD__ . "\n");
        $this->assertTrue(TRUE);
    }

    public function testTwo()
    {
        fwrite(STDOUT, __METHOD__ . "\n");
        $this->assertTrue(FALSE);
    }

    protected function assertPostConditions()
    {
        fwrite(STDOUT, __METHOD__ . "\n");
    }

    protected function tearDown()
    {
        fwrite(STDOUT, __METHOD__ . "\n");
    }

    public static function tearDownAfterClass()
    {
        fwrite(STDOUT, __METHOD__ . "\n");
    }

    //protected function onNotSuccessfulTest(\Exception $e)
    protected function onNotSuccessfulTest(\Exception $e)
    {
        fwrite(STDOUT, __METHOD__ . "\n");
        throw $e;
    }
}

/*
function ttt($foo) {
    global $foo1;
    $foo1 = $foo . "_02";
}
$foo = 'bar';
$foo1 = "nik";
ttt($foo);

echo $GLOBALS['foo'] . "---\n";
echo $GLOBALS['foo1'] . "---\n";
*/

//$pdo = new \PDO('mysql:dbname=nikolaz_db;host=10.0.0.227', 'nikolaz_usr', '6Puhj39!');
//var_dump($pdo);
//echo "Nikolaaaa111111\n";
//echo serialize($pdo); // 'You cannot serialize or unserialize PDO instances'
