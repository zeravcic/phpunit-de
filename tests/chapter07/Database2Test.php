<?php
/**
 * Created by PhpStorm.
 *
 * PHP version 5.6, 7
 *
 * @package Zeravcic\PhpUnit_De\Tests\chapter07
 * @author  Nikola Zeravcic <niks986@gmail.com>
 * @license <http://opensource.org/licenses/gpl-license.php GPL
 * @link    http://nikolazeravcic.iz.rs Personal site
 */

namespace Zeravcic\PhpUnit_De\Tests\chapter07;

// $loader = require __DIR__ . '/../../../../../vendor/autoload.php';

/**
 * Class Database2Test
 *
 * @package Zeravcic\PhpUnit_De\Tests\chapter04
 * @requires extension mysqli
 */
class Database2Test extends \PHPUnit_Framework_TestCase
{
    /**
     * @requires PHP 5.3
     */
    public function testConnection()
    {
        // Test requires the mysqli extension and PHP >= 5.3
    }

    // ... All other tests require the mysqli extension
}