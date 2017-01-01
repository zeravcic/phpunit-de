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

class MySqlGuestbook2Test extends \PHPUnit_Extensions_Database_TestCase
{
    /**
     * @return \PHPUnit_Extensions_Database_DB_IDatabaseConnection
     */
    public function getConnection()
    {
        $database = 'myguestbook_db';
        $user = 'myguestbook_usr';
        $password = 'MyGuestbook1';
        $pdo = new \PDO('mysql:myguestbook_db', $user, $password);
        return $this->createDefaultDBConnection($pdo, $database);
    }

    public function testGuestbook()
    {
        $dataSet = $this->getConnection()->createDataSet();
        // ...
    }

    public function testFilteredGuestbook()
    {
        $tableNames = array('guestbook');
        $dataSet = $this->getConnection()->createDataSet($tableNames);
        // ...
    }
    

    /**
     * @return \PHPUnit_Extensions_Database_DataSet_IDataSet
     */
    public function getDataSet()
    {
        //return $this->createFlatXMLDataSet(dirname(__FILE__).'/_files/guestbook-seed.xml');
    }
}