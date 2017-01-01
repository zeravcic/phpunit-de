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

class Connection3Test extends \PHPUnit_Extensions_Database_TestCase
{
    public function testGetRowCount()
    {
        $this->assertEquals(2, $this->getConnection()->getRowCount('myguestbook_db'));
    }
    
    
    
    public function getConnection() {
        //
    }
    
    public function getDataSet() {
        //
    }
}