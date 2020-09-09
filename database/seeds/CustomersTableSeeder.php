<?php

use Illuminate\Database\Seeder;
use App\Customer;

class CustomersTableSeeder extends Seeder
{
    public function run()
    {
        $data = file_get_contents("database/Queries/clients.json");
        $person = json_decode($data, true);
        foreach ($person as $value) {
            Customer::create([
                'person_id' => $value['person_id'],
                'state_customer' => $value['state_customer'],
            ]);
        }
    }
}
