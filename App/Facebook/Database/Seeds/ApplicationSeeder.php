<?php namespace App\Facebook\Database\Seeds;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ApplicationSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->installApplication('facebook', [
            'name'=>'Facebook',
            'description'=>'Application Facebook',
            'nameSpace'=>'Melisa.facebook',
            'typeSecurity'=>'art',
            'version'=>'1.0.0'
        ]);
        
    }
    
}
