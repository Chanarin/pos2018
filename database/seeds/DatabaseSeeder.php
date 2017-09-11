<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(LanguagesTableSeeder::class);
        $this->call(ChecklistDetailTableSeeder::class);
        $this->call(ChecklistsTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
        $this->call(InvoiceTableSeeder::class);
        $this->call(InvoiceDetailTableSeeder::class);
        $this->call(ItemCategoriesTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(ItemsDetailTableSeeder::class);
        $this->call(ItemsTransactionTableSeeder::class);
        $this->call(MigrationsTableSeeder::class);
        $this->call(OpenItemsTableSeeder::class);
        $this->call(OpenItemsDetailTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(ProductionTableSeeder::class);
        $this->call(ProductionDetailTableSeeder::class);
        $this->call(PurchaseTableSeeder::class);
        $this->call(PurchaseDetailTableSeeder::class);
        $this->call(SessionsTableSeeder::class);
        $this->call(UnitsTableSeeder::class);
    }
}
