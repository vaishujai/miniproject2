<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class InsertTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsert()
    {
        $user = factory(\App\User::class)->create();
        $this->assertDatabaseHas('users', ['name' =>$user->name]);
    }
}