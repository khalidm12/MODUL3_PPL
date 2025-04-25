<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ViewNoteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group ViewNote
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Log in') //mengklik tautan dengan teks “LOG IN”.
                    ->type('email', 'john@gmail.com') //mengisi kolom input dengan email “
                    ->type('password', 'password') //mengisi kolom input dengan password “password”.
                    ->press('LOG IN') //menekan tombol dengan teks “LOG IN”.
                    ->assertPathIs('/dashboard') //memastikan bahwa URL saat ini adalah “/dashboard”.
                    ->visit('/note/1'); //mengklik tautan dengan teks “Notes”
        });
    }
}
