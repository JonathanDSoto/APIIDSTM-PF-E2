<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::statement('CREATE OR REPLACE VIEW view_payments_per_fares
            AS
            SELECT
                name,
                COUNT(fare_id) AS payments_made,
                price,
                (price * COUNT(fare_id)) AS total_earnings
            FROM
                payments
                LEFT JOIN fares ON payments.fare_id = fares.id
            WHERE
                payment_status_id = 1 AND fare_id IS NOT NULL
            GROUP BY
                fare_id
            ORDER BY
                total_earnings
        ');
    }

    public function down(): void
    {
        DB::statement('DROP VIEW IF EXISTS view_payments_per_fares');
    }
};
