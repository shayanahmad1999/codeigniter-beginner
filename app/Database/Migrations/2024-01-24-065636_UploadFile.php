<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UploadFile extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned'=> true,
                'auto_increment' => true,
            ],
            'image' => [
                'type' => 'Text',
                'null' => true
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('upload_files'); 
    }

    public function down()
    {
        $this->forge->dropTable('upload_files'); 
    }
}
