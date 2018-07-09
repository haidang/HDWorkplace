<?php

use Illuminate\Database\Seeder;

use HDWorkplace\MainUsers;

class MainUsersSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  protected $values = [
    ['username'=>'admin',
    'email'=>'nvanhaidang@gmail.com',
    'password'=> 'admin',
    'name'=>'Hải Đăng',
    'address'=>'143 Nguyễn Chí Thanh, P9, Q5, TP HCM',
    'mobile'=>'0937669970',
    ]
  ];
  public function run()
  {
    foreach ($this->values as $index => $val) {
      $result = MainUsers::create($val);
      if (!$result) {
        $this->command->info("=>Insert failed at record $index.");
        return;
      }
    }
    $this->command->info('=>Inserted '.count($this->values).' records.');
  }
}
