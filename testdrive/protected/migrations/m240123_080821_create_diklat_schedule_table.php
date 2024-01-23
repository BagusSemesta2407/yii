<?php

class m240123_080821_create_diklat_schedule_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('diklat_schedule',array(
			'id' => 'pk',
			'place' => 'string',
			'startDate' => 'time',
			'endDate' => 'time',
			'date' => 'date',
			'kapasitas' => 'integer',
			'created_at' => 'timestamp',
			'update_at' => 'timestamp'
		));

	}

	public function down()
	{
		$this->dropTable('diklat_schedule');
		echo "m240123_080821_create_diklat_schedule_table does not support migration down.\n";
		return true;
	}

	
}