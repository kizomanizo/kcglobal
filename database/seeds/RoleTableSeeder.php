<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Make a client user that will be registration enabled for bidding and buying.
    	$role_client = new Role();
	    $role_client->name = 'client';
	    $role_client->description = 'Client user who bids and buys.';
	    $role_client->save();

	    // Make a seller that will be used by future partners.
	    $role_seller = new Role();
	    $role_seller->name = 'seller';
	    $role_seller->description = 'Sellers who list auctions and sell stuff.';
	    $role_seller->save();

	    // Make an administrator who controls the system.
	    $role_admin = new Role();
	    $role_admin->name = 'admin';
	    $role_admin->description = 'System users who make changes and control usage and purchases.';
	    $role_admin->save();
    }
}
