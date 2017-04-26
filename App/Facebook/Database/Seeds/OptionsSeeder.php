<?php namespace App\Facebook\Database\Seeds;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class OptionsSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->installOption('option.facebook.access', [
            'name'=>'Option main de aplicación facebook',
            'text'=>'Facebook',
            'isSubMenu'=>true,
            'iconClassSmall'=>'x-fa fa fa-cog',
            'iconClassMedium'=>'x-fa fa fa-cog fa-3x',
            'iconClassLarge'=>'x-fa fa fa-cog fa-5x',
        ]);
        
    }
    
}
