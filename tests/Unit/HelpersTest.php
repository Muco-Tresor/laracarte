<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class helpers extends TestCase
{
    /** @test * */
    public function page_title_should_work_well()
    {
        $this->assertEquals("Laracarte - List of all artisans", page_title(''));
    }
}
