<?php

namespace Database\Seeders;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        $superadmin_role = Role::create(['name' => 'superadmin']);
        $admin_role = Role::create(['name' => 'admin']);
        $volunteer_role = Role::create(['name' => 'volunteer']);
        $attendee = Role::create(['name' => 'attendee']);


        $register_tickets = Permission::create(['name' => 'register-tickets']);
        $view_all_users = Permission::create(['name' => 'view-all-users']);
        $edit_speakers = Permission::create(['name' => 'edit-speakers']);
        $change_settings = Permission::create(['name' => 'change-settings']);
        $approve_volunteers = Permission::create(['name' => 'approve-volunteers']);
        $access_dashboard = Permission::create(['name' => 'access-dashboard']);

        // $superadmin_role->syncPermissions([$register_tickets, $view_all_users, $edit_speakers]);
        $admin_role->syncPermissions([
            $register_tickets,
            $view_all_users,
            $edit_speakers,
            $change_settings,
            $approve_volunteers,
            $access_dashboard
        ]);

        $volunteer_role->syncPermissions([
            $register_tickets
        ]);

        Ticket::create([
            'name' => 'Basic',
            'code' => 'B22',
            'price' => 1000,
            'features' => ['Get access to the brine', 'Other features unique to this tier']
        ]);

        Ticket::create([
            'name' => 'Standard',
            'code' => 'S22',
            'price' => 5000,
            'features' => ['All features of Basic +', 'Other features unique to this tier']
        ]);

        Ticket::create([
            'name' => 'Premium',
            'code' => 'P22',
            'price' => 10000,
            'features' => ['All features of Silver +', 'Other features unique to this tier']
        ]);

        $superadmin = User::forceCreate([
            'firstname' => 'John',
            'lastname' => 'Doe',
            'email' => 'admin@admin.com',
            'phone' => '+234 903 454 3744',
            'email_verified_at' => now(),
            'password' => Hash::make('123456'), // password
            'remember_token' => Str::random(10),
        ]);

        $admin = User::forceCreate([
            'firstname' => 'Makuochukwu',
            'lastname' => 'Okeke',
            'email' => 'makuo@admin.com',
            'phone' => '+234 903 454 3744',
            'email_verified_at' => now(),
            'password' => Hash::make('123456'), // password
            'remember_token' => Str::random(10),
        ]);

        $superadmin->assignRole('superadmin');
        $admin->assignRole('volunteer');

        User::factory(2)->create();
    }
}
