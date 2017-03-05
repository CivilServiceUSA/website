<?php

namespace Tests\Unit;

use CivilServices\Data\State;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class StateTest extends TestCase
{
    /** @test */
    public function all_returns_a_collection()
    {
        $service = new State;
        $all = $service->all();
        $this->assertEquals(\Illuminate\Support\Collection::class, get_class($all));
    }

    /** @test */
    public function can_find_by_slug()
    {
        $service = new State;
        $all = $service->all();
        $lookup = $all->first();

        $slug = $lookup->slug;

        $one = $service->findBySlug($slug);

        $this->assertTrue(is_object($one));
        $this->assertEquals($slug, $one->slug);
    }

    // @todo write tests for all the other get methods to make sure we're filtering and returning correctly
}
