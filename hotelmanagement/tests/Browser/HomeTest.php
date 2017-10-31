<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class HomeTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Hotel Management System')
                    ->assertSeeLink('Manager Login')
                    ->assertSeeLink('Staff Login')
                    ->assertSeeLink('Admin Login')
                    ->assertSeeLink('HOME')
                    ->assertSeeLink('REGISTRATION')
                    ->assertSelected('ABOUT US', 'Brennan Guidry')
                    ->assertSelected('ABOUT US', 'Ippili Aashish')
                    ->assertSelected('ABOUT US', 'Oyetokunbo Ipaye')
                    ->assertSelected('ABOUT US', 'Taghreed Alghamdi');
        });
    }
}
