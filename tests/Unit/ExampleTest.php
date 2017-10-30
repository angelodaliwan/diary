<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    protected $user;
    protected $addDesign;

    public function setUp()
    {
        $this->user = new User('Louie', '22', 'test@test.com');
        $this->design = new Design('blue')
    }

    /** @test */
    public function BasicTest()
    {	
         $this->assertTrue(true);
    }

    /** @test */
    public function a_User_Name()
    {
        $this->assertEquals('Louie', $this->user->name());
    }

    /** @test */
    public function a_User_Age()
    {
         $this->assertEquals('22', $this->user->age());
    }

    /** @test */
    public function a_User_Email()
    {
        $this->assertEquals('test@test.com', $this->user->email());
    }

    // /** @test */

    // public function a_User_Add_Design()
    // {

    // }
}
