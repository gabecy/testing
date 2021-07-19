<?php

namespace Tests\Integration\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use App\Models\Article;

class ArticleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    use RefreshDatabase; //to use fresh database everytime running test
    /** @test */
    public function if_fetches_trending_articles()
    {
        //Given
        Article::factory()->count(2)->create();
        Article::factory()->create(['total_views' => 10]);
        $mostPopular = Article::factory()->create(['total_views' => 20]);

        //When
        $articles = Article::trending();



        //Then
        $this->assertEquals($mostPopular->id,$articles->first()->id);
        $this->assertCount(3,$articles);
    }
