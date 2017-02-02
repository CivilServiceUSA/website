<?php

namespace Tests\Feature;

use CivilServices\Data\Senator;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class SenatorTest extends TestCase
{
    /** @test */
    public function all_returns_a_collection()
    {
        $service = new Senator;
        $all = $service->all();
        $this->assertEquals(\Illuminate\Support\Collection::class, get_class($all));
    }

    /** @test */
    public function can_find_by_slug()
    {
        $service = new Senator;
        $all = $service->all();
        $lookup = $all->first();

        $slug = $lookup->slug;

        $one = $service->findBySlug($slug);

        $this->assertTrue(is_object($one));
        $this->assertEquals($slug, $one->slug);
    }
}
