<?php

namespace Database\Seeders;

use App\Models\EducationalGuidanceDonationTransactions;
use Illuminate\Database\Seeder;

class EducationalGuidanceDonationTransactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $months = [
            'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        ];

        EducationalGuidanceDonationTransactions::create([
            'user_id' => 4,
            'month' => 'Januari',
            'paid_date' => date('Y-m-d'),
            'amount_paid' => 120000,
            'bill' => 120000,
            'is_paid' => 1
        ]);

        foreach (range(4, 100) as $key => $range) {
            EducationalGuidanceDonationTransactions::create([
                'user_id' => mt_rand(5, 100),
                'month' => $months[mt_rand(0, 11)],
                'paid_date' => date('Y-m-d'),
                'amount_paid' => mt_rand(0, 1) === 0 ? 75000 : 120000,
                'bill' => mt_rand(0, 1) === 0 ? 75000 : 120000,
                'is_paid' => mt_rand(0, 1)
            ]);
        }
    }
}
