<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KerjaSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        $data = [];
        for ($i = 0; $i < 5; $i++) {
            $data[] = [
                'nama_kerja' => $faker->jobTitle(),
                'date_kerja' => $faker->dateTimeBetween('-2 years', 'now'),
                'info_gawe' => $faker->paragraphs(2, true),
            ];
        }
        // simpan db
        $this->db->table('kerja')->insertBatch($data);
    }
}
