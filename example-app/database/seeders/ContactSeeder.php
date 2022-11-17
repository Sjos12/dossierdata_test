<?php

namespace Database\Seeders;

use App\Models\Contact;
use Exception;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $placeholderContacts = [];
        $amount = 2;

        DB::beginTransaction();
        try {
            for ($i = 0; $i < $amount; $i++) {
                $contact = [
                    'naam' => Str::random(10),
                    'straat' => Str::random(10) . 'straat' . random_int(10, 99),
                    'postcode' => Str::random(6),
                    'plaats' => Str::random(10),
                ];
                Contact::create($contact);
            };
            DB::commit();
        } catch (Exception $error) {
            dd($error);
            DB::rollBack();
        }
    }
}
