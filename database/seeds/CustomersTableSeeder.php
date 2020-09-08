<?php

use Illuminate\Database\Seeder;
use App\Customer;
use Illuminate\Support\Str as Str;
use App\Modelsgenerals \{
    Country, Departament, Municipality
};

class CustomersTableSeeder extends Seeder
{
    public function run()
    {
        $data = file_get_contents("database/Queries/clients.json");
        $person = json_decode($data, true);
        foreach ($person as $value) {
            Customer::create([
                'dni' => $value['dni'],
                'first_name' => $value['first_name'],
                'last_name' => $value['last_name'],
                'slug' => $value['slug'],
                'type_dni' => $value['type_dni'],
                'phone' => $value['phone'],
                'landline' => $value['landline'],
                'email' => $value['email'],
                'address' => $value['address'],
                'country_id' => $value['country_id'],
                'departament_id' => $value['departament_id'],
                'municipality_id' => $value['municipality_id'],
                'location_id' => $value['location_id'],
                'neighborhood_id' => $value['neighborhood_id'],
                'latitude' => $value['latitude'],
                'longitude' => $value['longitude'],
                'birthdate' => $value['birthdate'],
                'state_customer' => $value['state_customer'],
            ]);
        }
    }
}
