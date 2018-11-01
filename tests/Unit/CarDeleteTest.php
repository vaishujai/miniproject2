<?php

namespace Tests\Unit;

use App\car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarDeleteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $del =car:: find(10);
        $del->delete();
        $this->assertDatabaseMissing('cars',["id"=>$del->id]);
    }
}
