<?php

/*
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\CarbonInterval;

use Carbon\CarbonInterval;
use Tests\AbstractTestCase;

class ForHumansTest extends AbstractTestCase
{
    public function testYear()
    {
        $this->assertSame('1 year', CarbonInterval::year()->forHumans());
    }

    public function testYearToString()
    {
        $this->assertSame('1 year:abc', CarbonInterval::year().':abc');
    }

    public function testYears()
    {
        $this->assertSame('2 years', CarbonInterval::years(2)->forHumans());
    }

    public function testYearsAndMonth()
    {
        $this->assertSame('2 years 1 month', CarbonInterval::create(2, 1)->forHumans());
    }

    public function testAll()
    {
        $ci = CarbonInterval::create(11, 1, 2, 5, 22, 33, 55)->forHumans();
        $this->assertSame('11 years 1 month 2 weeks 5 days 22 hours 33 minutes 55 seconds', $ci);
    }
}
