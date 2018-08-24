<?php
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
  public function run()
  {
    App\Setting::create([
      'site_name'       => 'LaravelWebAssignment',
      'contact_phone'   => '0773982666',
      'contact_email'   => 'admin@example.com',
      'contact_address' => 'University of kelaniya,Dalugama',
      'hours'           => '9am - 5pm',
      'support'         => '0345678921',
      'about'           => 'Leverage Group WebAssignment'
  }
}
