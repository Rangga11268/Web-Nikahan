<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kerja extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_kerja' => [
                'type' => 'BIGINT',
                'constraint' => 20,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_kerja' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'date_kerja' => [
                'type' => 'DATE',
            ],
            'info_kerja' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_kerja', true);
        $this->forge->createTable('kerja');
    }

    public function down()
    {
        $this->forge->dropTable('kerja');
    }
}
