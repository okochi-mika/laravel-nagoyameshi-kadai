<?php

namespace Tests\Feature\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function test_guest_cannot_access_admin_users_index(): void
{
    $response = $this->get('/admin/users');

    $response->assertRedirect('/admin/login'); // ← 未ログインなのでリダイレクトだけ確認！
}

    public function test_authenticated_user_cannot_access_admin_users_index(): void
{
    $user = \App\Models\User::factory()->create(); // ← 一般ユーザー（webガード）

    $response = $this->actingAs($user)->get('/admin/users');

    // 一般ユーザーは adminガードで保護されたルートにアクセスできないので
    // adminのログインページへリダイレクトされる
    $response->assertRedirect('/admin/login');
    
    // adminガードでは未ログインであることを明示
    $this->assertGuest('admin');
}

    public function test_authenticated_admin_can_access_admin_users_index(): void
{
    // 管理者ユーザーを作成（adminガードで認証されるユーザー）
    $admin = \App\Models\Admin::factory()->create();

    // adminガードでログイン状態にして管理者ユーザー一覧ページへアクセス
    $response = $this->actingAs($admin, 'admin')->get('/admin/users');

    // ステータスコード200（成功）を期待
    $response->assertStatus(200);

    // 必要なら画面に「会員一覧」とかあるかの確認も入れてOK
    $response->assertSee('会員一覧');
}


}
