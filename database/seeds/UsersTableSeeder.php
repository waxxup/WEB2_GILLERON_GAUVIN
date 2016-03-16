<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\User::class, 10)->create();
        DB::table('users')->insert([
            'name'   => 'admin',
            'email'      => 'admin@admin.fr',
            'password'   => Hash::make('admin'),
            'role'       => 'admin',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('users')->insert([
            'name'   => 'random',
            'email'      => 'random@random.fr',
            'password'   => Hash::make('random'),
            'role'       => 'randomUser',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
    }
}
