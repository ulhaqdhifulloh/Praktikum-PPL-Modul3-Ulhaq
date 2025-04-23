<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegistrationTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group registration
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Modul 3')
                    ->clickLink('Register')
                    ->assertPathIs('/register')
                    ->type('name', 'Dhifulloh Dhiya Ulhaq')
                    ->type('email', 'ulworld5mail@gmail.com')
                    ->type('password', '12345')
                    ->type('password_confirmation', '12345')
                    ->press('REGISTER');
        });
    }
}
