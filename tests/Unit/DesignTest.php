<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\DesignDiary;

class DesignTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    
    /** @test */
    public function a_user_select_design()
    {
    	$design = new DesignDiary('blue', 2);
    }
}
