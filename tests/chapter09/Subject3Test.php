<?php
/**
 * Created by PhpStorm.
 *
 * PHP version 5.6, 7
 *
 * @package Zeravcic\PhpUnit_De\Tests\chapter09
 * @author  Nikola Zeravcic <niks986@gmail.com>
 * @license <http://opensource.org/licenses/gpl-license.php GPL
 * @link    http://nikolazeravcic.iz.rs Personal site
 */

namespace Zeravcic\PhpUnit_De\Tests\chapter09;

use PHPUnit\Framework\TestCase;

/**
 * Class Subject3Test
 *
 * @package Zeravcic\PhpUnit_De\Tests\chapter09
 */
class Subject3Test extends TestCase
{
    public function testErrorReported()
    {
        // Create a mock for the Observer class, mocking the
        // reportError() method
        $observer = $this->getMockBuilder(Observer::class)
            ->setMethods(['reportError'])
            ->getMock();

        $observer->expects($this->once())
            ->method('reportError')
            ->with($this->greaterThan(0),
                $this->stringContains('Something'),
                $this->callback(function($subject){
                    return is_callable([$subject, 'getName']) &&
                        $subject->getName() == 'My subject';
                }));

        $subject = new Subject('My subject');
        $subject->attach($observer);

        // The doSomethingBad() method should report an error to the observer
        // via the reportError() method
        $subject->doSomethingBad();
    }
}
