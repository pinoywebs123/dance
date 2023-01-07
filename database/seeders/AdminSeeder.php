<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->role_id = 1;
        $user->student_id = '123';
        $user->name = 'Super Admin';
        $user->age = '30';
        $user->sex = 'Male';
        $user->college_year = 'none';
        $user->college = 'none';
        $user->program = 'none';
        $user->contact = 'none';
        $user->email = 'admin@gmail.com';
        $user->fb_link = 'none';
        $user->youtube_link = 'none';
        $user->status_id = 1;
        $user->password = bcrypt('admin123');
        $user->save();
    }
}
