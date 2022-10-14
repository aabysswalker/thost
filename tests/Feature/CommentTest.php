<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CommentTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testLeaveComment()
    {
        $user = User::factory()->create();

        $id = 1;

        $response = $this->actingAs($user)->post('/api/video/' . $id, [
            'content' => "Some comment",
            'video' => $id,
            'user_id' => $user['id'],
        ]);

        $this->assertDatabaseHas('comments', [
            'content' => 'Some comment'
        ]);
    }
}
