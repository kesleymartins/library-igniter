<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddAuthorIdToBooks extends Migration
{
    public function up(): void
    {
        $this->forge->addColumn('books', [
            'author_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true
            ]
        ]);

        $this->forge->addForeignKey('author_id', 'authors', 'id');
    }

    public function down(): void
    {
        $this->forge->dropColumn('books', 'author_id');
    }
}
