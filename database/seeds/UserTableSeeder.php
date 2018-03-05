<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role_client = Role::where('name', 'client')->first();
	    $role_seller  = Role::where('name', 'seller')->first();
	    $role_admin = Role::where('name', 'admin')->first();

	    // Create a sample client user.
	    $client = new User();
	    $client->firstname = 'Upendo';
	    $client->middlename = 'Client';
	    $client->surname = 'Amani';
	    $client->sex = 'female';
	    $client->email = 'client@example.com';
	    $client->phone = '0713123456';
	    $client->address = 'Sinza Kumekucha, Dar es Salaam';
	    $client->password = bcrypt('client');
	    $client->save();
	    $client->roles()->attach($role_client);

	    // Create a sample seller user.
	    $seller = new User();
	    $seller->firstname = 'Chriss';
	    $seller->middlename = 'Seller';
	    $seller->surname = 'Lukosi';
	    $seller->sex = 'male';
	    $seller->email = 'seller@example.com';
	    $seller->phone = '0754098765';
	    $seller->address = 'Mabatini, Mwanza';
	    $seller->password = bcrypt('seller');
	    $seller->save();
	    $seller->roles()->attach($role_seller);

	    // Create a sample admin user.
	    $admin = new User();
	    $admin->firstname = 'Adolph';
	    $admin->middlename = 'Admin';
	    $admin->surname = 'Ndyeabura';
	    $admin->sex = 'male';
	    $admin->email = 'admin@example.com';
	    $admin->phone = '0714628788';
	    $admin->address = 'Ununio, Dar es Salaam';
	    $admin->password = bcrypt('admin');
	    $admin->save();
	    $admin->roles()->attach($role_admin);
    }
}
