<?php

namespace Tests\Feature\Tweet;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Tweet;

class DeleteTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */

    public function test_delete_succeeded(): void
    {
        /*
        $response = $this->get('/'); // 作成したつぶやきIDを指定
        $response->assertStatus(200);
        */

        $user = User::factory()->create(); // ユーザーを作成

        $tweet = Tweet::factory()->create(['user_id' => $user->id]); // つぶやきを作成

        logger()->info('/tweet/delete/' . $tweet->id);

        $this->actingAs($user); // 指定したユーザーでログインした状態にする

        $response = $this->delete('/tweet/delete/' . $tweet->id); // 作成したつぶやきIDを指定

        logger()->info($response->dump());

        $response->assertRedirect('/tweet');
    }
}
