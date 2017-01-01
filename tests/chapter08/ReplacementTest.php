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

class ReplacementTest extends \PHPUnit_Extensions_Database_TestCase
{
    public function getDataSet()
    {
        $ds = $this->createFlatXmlDataSet(dirname(__FILE__) . '/_files/myFlatXmlFixture.xml');
        $rds = new \PHPUnit_Extensions_Database_DataSet_ReplacementDataSet($ds);
        $rds->addFullReplacement('##NULL##', null);
        return $rds;
    }
    
    public function getConnection() {
        //
    }
}