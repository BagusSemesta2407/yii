<?php

class m240123_093300_create_presences_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('presences',array(
			'id' => 'pk',
			'diklat_schedule_id' => 'integer',
			'participant_id' => 'integer',
			'status' => 'string',
			'created_at' => 'timestamp',
			'update_at' => 'timestamp'
		));

		$this->addForeignKey('fk_participant_participant_id', 'presences', 'participant_id', 'participant', 'id', 'CASCADE');

		$this->addForeignKey('fk_diklat_schedule_diklat_schedule_id', 'presences', 'diklat_schedule_id', 'diklat_schedule', 'id', 'CASCADE');
	}

	public function down()
	{
		$this->dropTable('presences');
		echo "m240123_093300_create_presences_table has been successfully.\n";
		return true;
	}
}