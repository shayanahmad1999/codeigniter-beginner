<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Company extends Migration
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
            'brand_name' => [
                'type' => 'VARCHAR',
                'constraint' => 45,
                'null' => true,
            ],
            
            'year_of_company_foundation' => [
                'type' => 'DATE',
            ],
            'year_of_offering_franchises' => [
                'type' => 'DATE',
            ],
            'pay_box_of_franchises' => [
                'type' => 'VARCHAR',
                'constraint' => 45,
                'null' => true,
            ],
            'average_turnover' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ],
            'contact_phone_name' => [
                'type' => 'VARCHAR',
                'constraint' => 45,
                'null' => true,
            ],
            'designation' => [
                'type' => 'VARCHAR',
                'constraint' => 45,
                'null' => true,
            ],
            'whatsApp_INT' => [
                'type' => 'VARCHAR',
                'constraint' => 45,
                'null' => true,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 45,
                'null' => true,
            ],
            'office_INT' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ],
            'postal_address' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'category' => [
                'type' => 'VARCHAR',
                'constraint' => 45,
                'null' => true,
            ],
            'country' => [
                'type' => 'VARCHAR',
                'constraint' => 45,
                'null' => true,
            ],
            'city' => [
                'type' => 'VARCHAR',
                'constraint' => 45,
                'null' => true,
            ],
            'province' => [
                'type' => 'VARCHAR',
                'constraint' => 45,
                'null' => true,
            ],
            'brand_logo' => [
                'type' => 'VARCHAR',
                'constraint' => 245,
                'null' => true,
            ],
            'setup_image_1' => [
                'type' => 'VARCHAR',
                'constraint' => 245,
                'null' => true,
            ],
            'setup_image_2' => [
                'type' => 'VARCHAR',
                'constraint' => 245,
                'null' => true,
            ],
            'setup_image_3' => [
                'type' => 'VARCHAR',
                'constraint' => 245,
                'null' => true,
            ],
            'brand_type' => [
                'type' => 'VARCHAR',
                'constraint' => 45,
                'null' => true,
            ],
            'brand_slogan' => [
                'type' => 'VARCHAR',
                'constraint' => 245,
                'null' => true,
            ],
            'slider' => [
                'type' => 'VARCHAR',
                'constraint' => 245,
                'null' => true,
            ],
            'image' => [
                'type' => 'VARCHAR',
                'constraint' => 245,
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('companies'); 
    }

    public function down()
    {
        $this->forge->dropTable('companies'); 
    }
}
