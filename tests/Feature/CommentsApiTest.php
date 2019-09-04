<?php

namespace Tests\Feature;

use App\Comment;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Artisan;

class CommentsApiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    //public function testExample()
    //{
    //    $response = $this->get('/');
    //    $response->assertStatus(200);
    //}

    public function setUp()
    {
        parent::setUp();
        Artisan::call('migrate');
    }

    public function testGetComments()
    {
        $comment = Comment::create(['content' => 'Salut']);
        $this->assertEquals(1, Comment::count());
    }
}
