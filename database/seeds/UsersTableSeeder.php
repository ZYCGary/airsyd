<?php

use App\Models\User;
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
        // Generate Fake users
        $users = factory(User::class)
            ->times(20)
            ->make();

        // Make hidden fields visible
        $user_array = $users->makeVisible(['password', 'remember_token'])->toArray();

        // Insert fake users into the database
        User::insert($user_array);

        // Set the first user data
        $user = User::find(1);
        $user->name = 'Gary';
        $user->email = 'gary@airsyd.com';
        $user->avatar = asset('images/defaults/avatars/avatar_5.png');
        $user->save();
    }
}
