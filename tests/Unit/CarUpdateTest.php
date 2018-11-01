<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\car;

class CarUpdateTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {

        $update= car::find(25);
        $update->year=2018;
        $update->save();
        $this->assertDatabaseHas('cars',["year" => '2018']);
    }
}
