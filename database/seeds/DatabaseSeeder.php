<?php

use Illuminate\Database\Seeder;

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

        Storage::deleteDirectory('courses');
        Storage::deleteDirectory('users');

        Storage::makeDirectory('courses');
        Storage::makeDirectory('users');

        factory(\App\Role::class, 1)->create(['name' => 'Admin']);
        factory(\App\Role::class, 1)->create(['name' => 'Profesor']);
        factory(\App\Role::class, 1)->create(['name' => 'Estudiante']);

        factory(\App\User::class, 1)->create([
        	'name' => 'admin',
	        'email' => 'admin@mail.com',
	        'password' => bcrypt('secret'),
	        'role_id' => \App\Role::ADMIN
        ])
        ->each(function (\App\User $u) {
        	factory(\App\Student::class, 1)->create(['user_id' => $u->id]);
        });

	    factory(\App\User::class, 1)->create([
		    'name' => 'Estudiante',
		    'email' => 'student@mail.com',
		    'password' => bcrypt('secret'),
		    'role_id' => \App\Role::STUDENT
	    ])
	        ->each(function (\App\User $u) {
	            factory(\App\Student::class, 1)->create(['user_id' => $u->id]);
	        });

	    factory(\App\User::class, 6)->create()
             ->each(function (\App\User $u) {
                 factory(\App\Student::class, 1)->create(['user_id' => $u->id]);
             });

	    factory(\App\User::class, 3)->create()
             ->each(function (\App\User $u) {
	             factory(\App\Student::class, 1)->create(['user_id' => $u->id]);
                 factory(\App\Teacher::class, 1)->create(['user_id' => $u->id]);
             });

	    factory(\App\Level::class, 1)->create(['name' => 'Inicial']);
	    factory(\App\Level::class, 1)->create(['name' => 'Intermedio']);
	    factory(\App\Level::class, 1)->create(['name' => 'Avanzado']);
	    factory(\App\Category::class, 5)->create();

	    factory(\App\Course::class, 3)
		    ->create()
		    ->each(function (\App\Course $c) {
		    	$c->goals()->saveMany(factory(\App\Goal::class, 2)->create());
		    	$c->requirements()->saveMany(factory(\App\Requirement::class, 4)->create());
		    });
    }
}
