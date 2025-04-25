<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/') //mengunjungi halaman web dengan route “/register”.
                    ->clickLink('Register') //mengklik tautan dengan teks “Register”.
                    ->type('name', 'John Doe') //mengisi kolom input dengan nama “John Doe”.
                    ->type('email', 'john@gmail.com') //mengisi kolom input dengan email “
                    ->type('password', 'password') //mengisi kolom input dengan password “password”.
                    ->type('password_confirmation', 'password') //mengisi kolom input dengan konfirmasi password “password”.
                    ->press('REGISTER'); //menekan tombol dengan teks “Register”.
                    
        });
    }
}
