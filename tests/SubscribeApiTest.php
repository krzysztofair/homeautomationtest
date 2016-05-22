<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SubscribeApiTest extends TestCase
{
    /** @test */
    public function it_validates_a_request()
    {
        $this->post('/api/subscribe')
            ->seeJsonContains([
                'Topic field is required'
            ]);
    }
}
