<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBooksTable extends Migration
{
    public function up(): void
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
                'null' => false, 
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false, 
            ],
            'available' => [
                'type' => 'TINYINT',
                'null' => false, 
            ]
        ]);
        
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('books', true);
    }

    public function down(): void
    {
        $this->forge->dropTable('books');
    }
}
