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

class GuestbookTest extends \PHPUnit_Extensions_Database_TestCase
{
    public function testAddEntry()
    {
        $this->assertEquals(2, $this->getConnection()->getRowCount('myguestbook_db'), "Pre-Condition");

        $guestbook = new \Guestbook();
        $guestbook->addEntry("suzy", "Hello world!");

        $this->assertEquals(3, $this->getConnection()->getRowCount('myguestbook_db'), "Inserting failed");
    }
    
    
    public function getConnection() {
        //
    }
    
    public function getDataSet() {
        //
    }
}