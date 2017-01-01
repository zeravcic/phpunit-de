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

class Guestbook2Test extends \PHPUnit_Extensions_Database_TestCase
{
    public function testAddEntry()
    {
        $guestbook = new \Guestbook();
        $guestbook->addEntry("suzy", "Hello world!");

        //$queryTable = $this->getConnection()->createQueryTable(
        //    'myguestbook_db', 'SELECT * FROM myguestbook_db'
        //);
        
        $queryTable = $this->getConnection()->createQueryTable(
            'myguestbook_db', 'SELECT id, content, user FROM myguestbook_db'
        );
        
        $expectedTable = $this->createFlatXmlDataSet(dirname(__FILE__)."/_files/expectedBook.xml")->getTable("myguestbook_db");
        $this->assertTablesEqual($expectedTable, $queryTable);
    }
    
    
    
    public function getConnection() {
        //
    }
    
    public function getDataSet() {
        //
    }
}