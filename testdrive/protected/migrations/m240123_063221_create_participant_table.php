<?php

class m240123_063221_create_participant_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('participant', array(
			'id' => 'pk',
			'name' => 'string',
			'gender' => 'string',
			'address' => 'text',
			'created_at' => 'timestamp',
			'update_at' => 'timestamp'
		));

	}

	public function down()
	{
		$this->dropTable('participant');
		echo "m240123_063221_create_participant_table has been successfully.\n";
		return true;
	}
	
}