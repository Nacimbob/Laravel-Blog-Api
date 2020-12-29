<?php

namespace Modules\Blog\Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BloggerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCreateBlogger()
    {
        $response=$this->postJson('/api/blog/bloggers',
        [
            'email'=>'fn_boubrit@esi.dz',
            'name'=>'nacim',
            'password'=>'123456789',
            'pseudo'=>'pseudo',
            'description'=>'description',
            'profile'=>'profile',
        ]);

        $response->assertStatus(201);
    }

    public function testUpdateBlogger(){
        $response=$this->putJson('/api/blog/bloggers/1',
        [
            'pseudo'=>'pseudo',
            'description'=>'description',
            'profile'=>'profile'
        ]);

        $response->assertStatus(200);
    }

}
