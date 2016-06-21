<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\User;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('Login');
    }

    /**
     * Working With Databases
     * Validar que si exita el Usuario Administrador
     * [testUsersAll description]
     * @return [type] [description]
     */
    public function testUsersAll()
    {
        $this->seeInDatabase('users', ['name'=>'Alexander andres londoño espejo', 'email' => 'admin@admin.com']);
    }

}
