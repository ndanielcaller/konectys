<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $name = 'Daniel Caller';
        $email = 'ndanielcaller@gmail.com';
        $user = factory(\App\User::class)->create([
            'name' => $name,
            'email' => $email,
            ]);

        $this->actingAs($user,'api');
        
        $response = $this->get('/api/user');
        $response->assertStatus(200);
        $response->assertSee($name.' '.$email);

    }
}
