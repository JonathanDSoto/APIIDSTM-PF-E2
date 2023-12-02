<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::statement('CREATE OR REPLACE VIEW view_last_year_earnings
            AS
            SELECT
                SUM(price) AS earnings
            FROM
                payments
                LEFT JOIN fares ON payments.fare_id = fares.id
            WHERE
                YEAR(payment_datetime) = YEAR(NOW() - INTERVAL 1 YEAR);
        ');
    }

    public function down(): void
    {
        DB::statement('DROP VIEW IF EXISTS view_last_year_earnings');
    }
};
