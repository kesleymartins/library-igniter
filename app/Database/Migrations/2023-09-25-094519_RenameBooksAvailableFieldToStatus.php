<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RenameBooksAvailableFieldToStatus extends Migration
{
    public function up(): void
    {
        $this->forge->modifyColumn('books', [
            'available' => [
                'name' => 'status',
                'type' => 'TINYINT',
            ]
        ]);
    }

    public function down(): void
    {
        $this->forge->modifyColumn('books', [
            'status' => [
                'name' => 'available',
                'type' => 'TINYINT'
            ]
        ]);
    }
}
