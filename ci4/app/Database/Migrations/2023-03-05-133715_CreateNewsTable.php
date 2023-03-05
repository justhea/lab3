<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateNewsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 200,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 200,
            ],
            'image' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'image' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ]);

        $this->forge->addField('created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP');
        $this->forge->addField('updated_at TIMESTAMP NULL');
        $this->forge->addField('deleted_at TIMESTAMP NULL');

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('cpbustamante_news');
    }

    public function down()
    {
        $this->forge->dropTable('cpbustamante_news');
    }
}
