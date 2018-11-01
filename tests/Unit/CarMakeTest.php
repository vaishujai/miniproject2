<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\car;

class CarMakeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
   public function testExample()
    {
        $make=car::find(25);
        $find=$make->make;
        $this->assertContains($find,['ford','honda','toyota']);
    }
}

