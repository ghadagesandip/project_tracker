<?php

class m130908_132631_update_column_last_login_time_of_user extends CDbMigration
{
	/*
	public function up()
	{
	}

	public function down()
	{
		echo "m130908_132631_update_column_last_login_time_of_user does not support migration down.\n";
		return false;
	}
*/
	
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		$this->alterColumn('tbl_user','last_login_time','integer');
	}

	public function safeDown()
	{
		$this->addColumn('tbl_user','last_login_time','datetime');
	}
	
}