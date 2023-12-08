<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::statement('CREATE OR REPLACE VIEW view_last_month_earnings
            AS
            SELECT
                SUM(price) AS earnings
            FROM
                payments
                LEFT JOIN fares ON payments.fare_id = fares.id
            WHERE
                MONTH(payment_datetime) = MONTH(NOW() - INTERVAL 1 MONTH)
                AND
                YEAR(payment_datetime) = YEAR(NOW() - INTERVAL 1 MONTH);
        ');
    }

    public function down(): void
    {
        DB::statement('DROP VIEW IF EXISTS view_last_month_earnings');
    }
};
