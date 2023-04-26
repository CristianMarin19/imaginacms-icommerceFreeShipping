<?php

namespace Modules\Icommercefreeshipping\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Icommercefreeshiping\Database\Seeders\IcommercefreeshipingModuleTableSeeder;
use Modules\Isite\Jobs\ProcessSeeds;

class IcommercefreeshippingDatabaseSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Model::unguard();
    ProcessSeeds::dispatch([
      "baseClass" => "\Modules\Icommercefreeshipping\Database\Seeders",
      "seeds" => ["IcommercefreeshippingModuleTableSeeder", "PaymentTableSeeder"]
    ]);
  }
}
