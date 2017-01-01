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

class NikolaTest extends \PHPUnit_Extensions_Database_TestCase
{
    /**
     * @return \PHPUnit_Extensions_Database_DB_IDatabaseConnection
     */
    public function getConnection()
    {
        $pdo = new PDO('mysql:dbname=myguestbook_db;host=127.0.0.1', 'myguestbook_usr', 'MyGuestbook1');
        return $this->createDefaultDBConnection($pdo, 'myguestbook_db');
    }

    /**
     * @return \PHPUnit_Extensions_Database_DataSet_IDataSet
     */
    public function getDataSet()
    {
        return $this->createXMLDataSet(dirname(__FILE__).'/_files/guestbook-seed2.xml');
    }
    
    public function testNik() {
        $this->assertTrue(true);
    }
    
    public function testFilteredGuestbook()
    {
        $connect = mysqli_connect('localhost', 'myguestbook_usr', 'MyGuestbook1', 'myguestbook_db') or die();
        mysqli_query($connect, "UPDATE guestbook SET user='Nikola " . time() . "' WHERE id='1'");
        
        $tableNames = array('guestbook');
        $dataSet = $this->getConnection()->createDataSet($tableNames);
        //var_dump($dataSet);
        $this->assertEquals(2, $this->getConnection()->getRowCount('guestbook'), "Inserting failed");
    }
    
    public function testMock() {
        // Create a stub for the SomeClass class.
        $stub = $this->getMockBuilder('SomeClass')
                     ->getMock();

        // Configure the stub.
        $stub->method('doSomething')
             ->will($this->onConsecutiveCalls(2, 3, 5, 7));

        // $stub->doSomething() returns a different value each time
        $this->assertEquals(2, $stub->doSomething());
        $this->assertEquals(3, $stub->doSomething());
        $this->assertEquals(5, $stub->doSomething());
    }
}



class SomeClass
{
    public function doSomething()
    {
        // Do something.
    }
}