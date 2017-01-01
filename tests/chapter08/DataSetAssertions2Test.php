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

class DataSetAssertions2Test extends \PHPUnit_Extensions_Database_TestCase
{
    public function testManualDataSetAssertion()
    {
        $dataSet = new \PHPUnit_Extensions_Database_DataSet_QueryDataSet();
        $dataSet->addTable('guestbook', 'SELECT id, content, user FROM guestbook'); // additional tables
        $expectedDataSet = $this->createFlatXmlDataSet(dirname(__FILE__) . '/_files/guestbook.xml');

        $this->assertDataSetsEqual($expectedDataSet, $dataSet);
    }
    
    
    
    public function getConnection()
    {
        //
    }
    
    public function getDataSet()
    {
        //
    }
}