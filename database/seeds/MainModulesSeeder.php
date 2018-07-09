<?php

use Illuminate\Database\Seeder;

use HDWorkplace\MainModules;

class MainModulesSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  protected $values = [
    [
      'id'      => 1,
			'name'		=> 'calendar',
			'label'		=> 'Lịch',
      'description' => 'Công việc, sự kiện theo ngày tháng',
			'fa_icon'	=> 'fa fa-calendar',
      'sort'    => 1,
		],[
			'id'       => 2,
			'name'     => 'customer',
			'label'    => 'Khách hàng',
      'description' => 'Thông tin khách hàng',
			'fa_icon'  => 'fa fa-university',
      'sort'     => 2,
		],[
      'id'       => 3,
      'name'     => 'contact',
      'label'    => 'Danh bạ',
      'description' => 'Thông tin người liên hệ',
      'fa_icon'  => 'fa fa-book',
      'sort'     => 3,
		],[
			'id'       => 4,
			'name'     => 'ticket',
			'label'    => 'Công việc',
      'description' => 'Danh sách công việc',
			'fa_icon'  => 'fa fa-newspaper-o',
      'sort'     => 4,
		],[
			'id'       => 5,
			'name'     => 'picklist',
			'label'    => 'Danh mục',
      'description' => 'Danh mục hệ thống',
			'fa_icon'  => 'fa fa-gears',
      'sort'     => 5,
		],[
			'id'        => 6,
			'name'      => 'main',
			'label'     => 'Cấu hình',
      'description' => 'Cấu hình chung cho hệ thống',
			'fa_icon'   => 'fa fa-cogs',
      'sort'      => 6,
		],
  ];
  public function run()
  {
    foreach ($this->values as $index => $val) {
      $result = MainModules::create($val);
      if (!$result) {
        $this->command->info("=>Insert failed at record $index.");
        return;
      }
    }
    $this->command->info('=>Inserted '.count($this->values).' records.');
  }
}
