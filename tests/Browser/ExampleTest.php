<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\User;
class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        
        $this->browse(function ($browser) {
        $browser->loginAs(User::where('email', 'bhavik@gmail.com')->firstOrFail())->visit('/pro')->clickLink('ADD NEW');
        

    });

    }
    public function testRegister()
{
    $this->browse(function ($browser) {
        $browser
            ->visit('http://127.0.0.1:8001/register')
           
            ->value('#name', 'Tayor')
            ->value('#email', 'c@gmail.com')
            
            ->value('#password','12345678')
            ->value('#password-confirm','12345678')
            ->click('button[type="submit"]')
            ->assertPathIs('/home');

    });
}
public function testlogin()
{
    $this->browse(function ($browser) {
        $browser
            ->visit('http://127.0.0.1:8001/login')
           
            
            ->value('#email', 'bhavik@gmail.com')
            
            ->value('#password','12345678')
            
            ->click('button[type="submit"]')
            ->clickLink('Projects');
            

    });
}

public function testaddingproject()
{
    $this->browse(function ($browser) {
        $browser
 
            ->clickLink('Projects')
            ->clickLink('ADD NEW')

            ->click('#Save-button');
    });
}

public function testuser()
{
    $this->browse(function ($browser) {
        $browser
            

            ->clickLink('Users')
            ->clickLink('Details')
            ->clickLink('Assign new project')

            ->press('Save');

    });
}

}