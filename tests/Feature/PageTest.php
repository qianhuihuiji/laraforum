<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PageTest extends TestCase
{
    /** @test */
    public function it_can_see_the_root_page()
    {
        $this->get(route('root'))->assertStatus(200);
    }
}
