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

class Connection2Test extends \PHPUnit_Extensions_Database_TestCase
{
    public function testCreateQueryTable()
    {
        $tableNames = array('myguestbook_db');
        $queryTable = $this->getConnection()->createQueryTable('myguestbook_db', 'SELECT * FROM myguestbook_db');
    }
    
    
    
    public function getConnection() {
        //
    }
    
    public function getDataSet() {
        //
    }
}