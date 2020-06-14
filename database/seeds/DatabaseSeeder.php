<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(CategoriaFactory::class);
        // $this->call(ClienteFactory::class);
        //$this->call(ProdutoFactory::class);
        //$this->call(VendaFactory::class);
        // $this->call(FornecedorFactory::class);

        factory(\App\Cliente::class, 10)->create();
        factory(\App\Fornecedor::class, 10)->create();
    }
}
