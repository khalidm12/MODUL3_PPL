<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LogoutTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group Logout
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Log in') //mengklik tautan dengan teks “LOG IN”.
                    ->type('email', 'john@gmail.com') //mengisi kolom input dengan email “
                    ->type('password', 'password') //mengisi kolom input dengan password “password”.
                    ->press('LOG IN') //menekan tombol dengan teks “LOG IN”.
                    ->clickLink('Dashboard') //mengklik tautan dengan teks “LOG IN”.
                    // ->assertPathIs('/dashboard') //memastikan bahwa URL saat ini adalah “/dashboard”.
                    ->waitFor('#click-dropdown') // menunggu elemen dengan ID “click-dropdown” muncul di halaman.
                    // ->pause(500) // menunggu setengah detik untuk memastikan elemen dropdown muncul.
                    // ->waitForText('John Doe') // menunggu teks “John Doe” muncul di halaman.
                    ->click('#click-dropdown') //mengklik elemen dengan ID “click-dropdown”.
                    ->waitForText('Log Out') // menunggu teks “Log Out” muncul di halaman.
                    ->clickLink('Log Out'); //mengklik tautan dengan teks “Log Out”.

        });
    }
}
