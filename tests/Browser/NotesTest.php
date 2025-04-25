<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group Notes
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
                    ->clickLink('Notes') //mengklik tautan dengan teks “Notes”.
                    ->assertPathIs('/notes') //memastikan bahwa URL saat ini adalah “/notes”.
                    ->clickLink('Create Note') //mengklik tautan dengan teks “Create Note”.
                    ->assertPathIs('/create-note') //memastikan bahwa URL saat ini adalah “/create-notes”.
                    ->type('title', 'Test Note') //mengisi kolom input dengan judul “Test Note”.
                    ->type('description', 'This is a test note.') //mengisi kolom input dengan konten “This is a test note.”.
                    ->press('CREATE'); //menekan tombol dengan teks “CREATE”.;
        });
    }
}
