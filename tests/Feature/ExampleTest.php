<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Post;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_passing_array_as_values_causes_query_exception()
    {
        $this->expectException(\Illuminate\Database\QueryException::class);

        Post::query()->toBase()->insert([[
            'tags' => ['foo', 'bar'],
        ]]);
    }
}
