<?php

use App\Models\Profile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class TenantsUserTableSeeder extends Seeder
{
    private $user;
    private $profile;

    private $admin;
    private $profileAdmin;

    private function createProfile()
    {
        $this->profile = Profile::create([
            'name'  => 'Suporte',
            'label' => 'Suporte'
        ]);


        $this->profileAdmin = Profile::create([
            'name'  => 'Admin',
            'label' => 'Administrador'
        ]);
    }

    private function createUser()
    {
        $this->user = User::create([
            'name'      => 'Suporte',
            'fantasy'   => 'Suporte',
            'email'     => 'suporte@agille.com.br',
            'password'  => bcrypt('pl4c32k')
        ]);

    }

    private function createPermissions()
    {
        $path =  storage_path('app/public/files_sql/permissions.sql');
        DB::unprepared(file_get_contents($path));
    }


    private function createPermissionsProfile()
    {
        $path =  storage_path('app/public/files_sql/permission_profile.sql');
        DB::unprepared(file_get_contents($path));
    }



    private function createProfileUser()
    {
        $path =  storage_path('app/public/files_sql/profile_user.sql');
        DB::unprepared(file_get_contents($path));
    }




    private function sync()
    {
        $suporte = $this->user->where('name', 'Suporte')->first();

        $suporte->profiles()->save($this->profile);
    }


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // Desabilitas as FKs
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('profile_user')->truncate();
        DB::table('profiles')->truncate();
        DB::table('users')->truncate();


        $this->createProfile();
        $this->createUser();
        $this->sync();

        $this->createPermissions();
        $this->createPermissionsProfile();
        $this->createProfileUser();

        // Habilitas as FKs
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }


}
