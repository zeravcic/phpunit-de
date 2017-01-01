<?php
/**
 * Created by PhpStorm.
 *
 * PHP version 5.6, 7
 *
 * @package Zeravcic\PhpUnit_De\Tests\chapter02
 * @author  Nikola Zeravcic <niks986@gmail.com>
 * @license <http://opensource.org/licenses/gpl-license.php GPL
 * @link    http://nikolazeravcic.iz.rs Personal site
 */

namespace Zeravcic\PhpUnit_De\Tests\chapter02;

// $loader = require __DIR__ . '/../../../../../vendor/autoload.php';

class Exception3Test extends \PHPUnit_Framework_TestCase
{
    public function testException()
    {
        $this->setExpectedException('InvalidArgumentException');
        //throw new \InvalidArgumentException('Some Message', 10);
        //echo $this->getExpectedException();
    }

    public function testExceptionHasRightMessage()
    {
        $this->setExpectedException(
          'InvalidArgumentException', 'Right Message'
        );
        throw new \InvalidArgumentException('Some Message', 10);
    }

    public function testExceptionMessageMatchesRegExp()
    {
        $this->setExpectedExceptionRegExp(
          'InvalidArgumentException', '/Right.*/', 10
        );
        throw new \InvalidArgumentException('The Wrong Message', 10);
    }

    public function testExceptionHasRightCode()
    {
        $this->setExpectedException(
          'InvalidArgumentException', 'Right Message', 20
        );
        throw new \InvalidArgumentException('The Right Message', 10);
    }
}