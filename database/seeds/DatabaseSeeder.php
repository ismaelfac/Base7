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
        $this->truncateTables([
            'password_resets',
            'users',
            'permission_role',
            'permissions',
            'roles',
            'role_user',
            'people',
            'customers',
            'companies',
            'identifications',
            'neighborhoods',
            'locations',
            'municipalities',
            'departaments',
            'countries',
            'identifications',
            'companies_modules',
            'modules'
        ]);
        $this->call([
            ModuleTableSeeder::class,
            PermissionsTableSeeder::class,
            CountryTableSeeder::class,
            DepartamentTableSeeder::class,
            MunicipalityTableSeeder::class,
            LocationTableSeeder::class,
            NeighborhoodTableSeeder::class,
            IdentificationTableSeeder::class,
            CivilstatusTableSeeder::class,
            PersonTableSeeder::class,
            CustomersTableSeeder::class,
            CompanyTableSeeder::class,
            CompanyModuleTableSeeder::class,
            UserTableSeeder::class
        ]);
    }

    protected function truncateTables(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Reactivamos la revisión de claves foráneas
    }
}
