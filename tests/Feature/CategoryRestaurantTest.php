<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Restaurant;
use App\Models\Category;


class CategoryRestaurantTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
         // Arrange（準備）
        $restaurant = Restaurant::factory()->create();
        $categories = Category::factory()->count(3)->create();

        // Act（処理）
        $restaurant->categories()->attach($categories->pluck('id')->toArray());

        // Assert（確認）
        $this->assertCount(3, $restaurant->categories); // カテゴリが3つ紐づいているか
    }
}
