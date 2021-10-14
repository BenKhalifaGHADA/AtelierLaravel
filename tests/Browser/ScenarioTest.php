<?php

namespace Tests\Browser;

use App\Models\Product;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ScenarioTest extends DuskTestCase
{
    use DatabaseMigrations;


    public function test_Add() {
      $this->browse(function(Browser $browser){
       $browser->visit('/produits/create')
               ->type('Name','test')
                ->type('description','c est un test')
                 ->type('price',1)
                 ->type('stock',15)
                 ->type('category',1)
                 ->click('button[type="submit"]')
                 ->assertSee('You are logged in');
      });
    }

}
