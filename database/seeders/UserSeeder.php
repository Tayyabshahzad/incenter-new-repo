<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserDetail;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     
        $user = new User;
        $user->name = "admin";
        $user->email = "admin@gmail.com";
        $user->password = bcrypt("Google@123");
        $user->phone = "000000000";
        $user->agree_consent_electronic = true;
        $user->status = 'active';
        $user->parent_id = 1;
        $user->is_primary = true;
        $user->email_verified_at = Carbon::now();
        $user->save();
        $user->assignRole('admin');
 
    }
}
