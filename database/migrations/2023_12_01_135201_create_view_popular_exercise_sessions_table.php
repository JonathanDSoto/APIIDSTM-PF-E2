<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::statement('CREATE OR REPLACE VIEW view_popular_exercise_sessions
            AS
            SELECT
                COUNT(exercise_type_id) AS assigned_sessions,
                exercise_types.*
            FROM
                session_days
                LEFT JOIN sessions ON session_days.session_id = sessions.id
                LEFT JOIN exercise_types ON sessions.exercise_type_id = exercise_types.id
            GROUP BY
                exercise_type_id
            ORDER BY
                assigned_sessions DESC
        ');
    }

    public function down(): void
    {
        DB::statement('DROP VIEW IF EXISTS view_popular_exercise_sessions');
    }
};
