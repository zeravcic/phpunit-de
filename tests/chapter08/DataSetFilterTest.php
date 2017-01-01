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

class DataSetFilterTest extends \PHPUnit_Extensions_Database_TestCase
{
    public function testIncludeFilteredGuestbook()
    {
        $tableNames = array('guestbook');
        $dataSet = $this->getConnection()->createDataSet();

        $filterDataSet = new \PHPUnit_Extensions_Database_DataSet_DataSetFilter($dataSet);
        $filterDataSet->addIncludeTables(array('guestbook'));
        $filterDataSet->setIncludeColumnsForTable('guestbook', array('id', 'content'));
        // ..
    }

    public function testExcludeFilteredGuestbook()
    {
        $tableNames = array('guestbook');
        $dataSet = $this->getConnection()->createDataSet();

        $filterDataSet = new \PHPUnit_Extensions_Database_DataSet_DataSetFilter($dataSet);
        $filterDataSet->addExcludeTables(array('foo', 'bar', 'baz')); // only keep the guestbook table!
        $filterDataSet->setExcludeColumnsForTable('guestbook', array('user', 'created'));
        // ..
    }
    
    public function getConnection() {
        //
    }
    
    public function getDataSet() {
        //
    }
}