<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::statement('CREATE OR REPLACE VIEW view_customers_pending_payment
            AS
            SELECT
                *,
                EXISTS (
                    SELECT id
                    FROM payments
                    WHERE customer_id = customers.id AND payment_status_id = 2
                ) AS has_pending_payment
            FROM
                customers
        ');
    }

    public function down(): void
    {
        DB::statement('DROP VIEW IF EXISTS view_customers_pending_payment');
    }
};
