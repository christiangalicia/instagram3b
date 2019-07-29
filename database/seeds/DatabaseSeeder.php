<?php

use Illuminate\Database\Seeder;
use App\Usuario;
use App\Publicacion;
use App\Seguidor;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $usuarios= factory(Usuario::class, 25)->create();
        
        foreach ($usuarios as $user){
           $publicaciones= factory(Publicacion::class, rand(0,10))->create(
                    ['usuario_id'=>$user->id]);
                 
        }
        
        $publicaciones = Publicacion::all();
        
        
        
        foreach ($usuarios as $user){
            $hasta= rand(5,42);
            for($i=0;$i<$hasta;$i++){
               factory(Seguidor::class)->create(
                    ['usuario_id'=>$user->id,
                     'publicacion_id'=>rand(1,$publicaciones->count())]); 
            }
            
        }
    }
}
