<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call('ContasPagarTableSeeder');
        //$this->call(ContasPagarTableSeeder::class);
    }
}

class ContasPagarTableSeeder extends Seeder {
	public function run()
    {
        DB::insert('insert into contas_pagar (descricao, valor) values (?, ?)',
                   array('Pagamento Água', '92.99'));

        DB::insert('insert into contas_pagar (descricao, valor) values (?, ?)',
                   array('Pagamento Telefone', '89.99'));

        DB::insert('insert into contas_pagar (descricao, valor) values (?, ?)',
                   array('Pagamento TV', '139.99'));
    }
}
