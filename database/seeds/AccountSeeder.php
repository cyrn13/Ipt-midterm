<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        [
            'user_id' => 1,
            'acct_name' => 'Runner',
            'init_invest' => 19300,
            'start_date' => '2025-12-11',
            'remarks' => 'Creativity'
        ],
        [
            'user_id' => 2,
            'acct_name' => 'Ghost',
            'init_invest' => 41000,
            'start_date' => '2024-12-12',
            'remarks' => 'Improving'
        ],

        [
            'user_id' => 1,
            'acct_name' => 'Runner',
            'init_invest' => 14300,
            'start_date' => '2025-12-11',
            'remarks' => 'Innovation and creativity'
        ],
        [
            'user_id' => 2,
            'acct_name' => 'Ghost',
            'init_invest' => 9000,
            'start_date' => '2024-12-12',
            'remarks' => 'Outstanding'
             ],
        ];
        
        foreach($data as $account) {
            \App\Account::create($account);
        }
    }
}
