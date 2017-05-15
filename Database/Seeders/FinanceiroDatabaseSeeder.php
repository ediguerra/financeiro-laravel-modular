<?php

namespace Financeiro\Financeiro\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Financeiro\Financeiro\Entities\Categoria;

class FinanceiroDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $categoria = new Categoria();
        $categoria->nome = "teste cat";
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nome = "teste cat 2 ";
        $categoria->save();


        $categoria = new Categoria();
        $categoria->nome = "teste cat 3";
        $categoria->save();

        // $this->call("OthersTableSeeder");
    }
}
