<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { {
            DB::table('users')->insert([
                'name' => 'admin user',
                'email' => 'admin@gmail.com',
                'major' => 'Administrator',
                'role' => 'admin',
                'phone_number' => '0106506010',
                'password' => Hash::make('11111111'),
                'is_active' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
            DB::table('users')->insert([
                'name' => 'student1',
                'email' => 'student1@gmail.com',
                'major' => 'Freelancer',
                'role' => 'admin',
                'phone_number' => '0106506010',
                'password' => Hash::make('11111111'),
                'is_active' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
            DB::table('users')->insert([
                'name' => 'student2',
                'email' => 'student2@gmail.com',
                'major' => 'Developer',
                'role' => 'admin',
                'phone_number' => '0106506010',
                'password' => Hash::make('11111111'),
                'is_active' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
            DB::table('users')->insert([
                'name' => 'student2',
                'email' => 'student3@gmail.com',
                'major' => 'Developer',
                'role' => 'admin',
                'phone_number' => '0106506010',
                'password' => Hash::make('11111111'),
                'is_active' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
            DB::table('users')->insert([
                'name' => 'student2',
                'email' => 'student4@gmail.com',
                'major' => 'Developer',
                'role' => 'admin',
                'phone_number' => '0106506010',
                'password' => Hash::make('11111111'),
                'is_active' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            // for question create
            DB::table('threads')->insert([
                'subject' => 'how to seed data in laravel database ?',
                'thread' => 'Laravel includes a simple method of seeding your database with test data using seed classes. All seed classes are stored in the database/seeds directory. Seed classes may have any name you wish, but probably should follow some sensible convention, such as UserSeeder, etc. By default, a DatabaseSeeder class is defined for you. From this class, you may use the call method to run other seed classes, allowing you to control the seeding order.',
                'user_id' => '4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
            DB::table('threads')->insert([
                'subject' => 'can we use laravel with nuxt js framework?',
                'thread' => 'currently , i have create project with laravel and I want to integrate with nuxt framework',
                'user_id' => '4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
            DB::table('threads')->insert([
                'subject' => 'how to seed data in laravel database ?',
                'thread' => 'Laravel includes a simple method of seeding your database with test data using seed classes. All seed classes are stored in the database/seeds directory. Seed classes may have any name you wish, but probably should follow some sensible convention, such as UserSeeder, etc. By default, a DatabaseSeeder class is defined for you. From this class, you may use the call method to run other seed classes, allowing you to control the seeding order.',
                'user_id' => '5',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
            DB::table('threads')->insert([
                'subject' => 'how to seed data in laravel database ?',
                'thread' => 'Laravel includes a simple method of seeding your database with test data using seed classes. All seed classes are stored in the database/seeds directory. Seed classes may have any name you wish, but probably should follow some sensible convention, such as UserSeeder, etc. By default, a DatabaseSeeder class is defined for you. From this class, you may use the call method to run other seed classes, allowing you to control the seeding order.',
                'user_id' => '5',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
            DB::table('threads')->insert([
                'subject' => 'how to seed data in laravel database ?',
                'thread' => 'Laravel includes a simple method of seeding your database with test data using seed classes. All seed classes are stored in the database/seeds directory. Seed classes may have any name you wish, but probably should follow some sensible convention, such as UserSeeder, etc. By default, a DatabaseSeeder class is defined for you. From this class, you may use the call method to run other seed classes, allowing you to control the seeding order.',
                'user_id' => '5',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
            // tag seed
            DB::table('tags')->insert([
                'name' => 'laravel',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
            DB::table('tags')->insert([
                'name' => 'Nodejs',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
            DB::table('tags')->insert([
                'name' => 'Python',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
            // apply tag relation
            DB::table('tag_thread')->insert([
                'thread_id' => '1',
                'tag_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
            DB::table('tag_thread')->insert([
                'thread_id' => '2',
                'tag_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
            DB::table('tag_thread')->insert([
                'thread_id' => '3',
                'tag_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
            DB::table('tag_thread')->insert([
                'thread_id' => '1',
                'tag_id' => '3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            // role user
            DB::table('roles')->insert([
                'name' => 'admin',
                'guard_name' => 'web',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
            DB::table('roles')->insert([
                'name' => 'teacher',
                'guard_name' => 'web',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
            DB::table('roles')->insert([
                'name' => 'student',
                'guard_name' => 'web',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            // permissions
            DB::table('permissions')->insert([
                'name' => 'show admin',
                'guard_name' => 'web',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
            DB::table('permissions')->insert([
                'name' => 'show teacher',
                'guard_name' => 'web',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            // model has permissions
            DB::table('model_has_permissions')->insert([
                'permission_id' => '1',
                'model_type' => 'App\User',
                'model_id' => '1'
            ]);
            DB::table('model_has_permissions')->insert([
                'permission_id' => '2',
                'model_type' => 'App\User',
                'model_id' => '1'
            ]);
            DB::table('model_has_permissions')->insert([
                'permission_id' => '2',
                'model_type' => 'App\User',
                'model_id' => '5'
            ]);

            //model has roles

            DB::table('model_has_roles')->insert([
                'role_id' => '1',
                'model_type' => 'App\User',
                'model_id' => '1'
            ]);
            DB::table('model_has_permissions')->insert([
                'permission_id' => '2',
                'model_type' => 'App\User',
                'model_id' => '5'
            ]);

            //role has permission
            DB::table('role_has_permissions')->insert([
                'permission_id' => '1',
                'role_id' => '1'
            ]);
            DB::table('role_has_permissions')->insert([
                'permission_id' => '2',
                'role_id' => '1'
            ]);
        }
    }
}
