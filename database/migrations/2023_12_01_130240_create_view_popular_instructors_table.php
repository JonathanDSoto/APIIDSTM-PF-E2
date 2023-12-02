<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    // No idea how to make views with Eloquent.
    public function up(): void
    {
        DB::statement('CREATE OR REPLACE VIEW view_popular_instructors
            AS
            SELECT
                COUNT(instructor_id) AS assigned_sessions,
                instructors.*
            FROM
                session_days
                LEFT JOIN instructors ON session_days.instructor_id = instructors.id
            GROUP BY
                instructor_id
            ORDER BY
                assigned_sessions DESC
        ');
    }

    public function down(): void
    {
        DB::statement('DROP VIEW IF EXISTS view_popular_instructors');
    }
};
