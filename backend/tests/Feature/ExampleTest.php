<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * テスト環境でない場合はエラー
     * @test
     */
    public function is_in_test_env()
    {
        $this->assertEquals('testing', $this->app->environment());
    }
}
