<?php

class m130908_131702_add_column_last_login_time_to_user extends CDbMigration
{
	/*
	public function up()
	{
	}

	public function down()
	{
		echo "m130908_131702_add_column_last_login_time_to_user does not support migration down.\n";
		return false;
	}
	*/
	
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		$this->addColumn('tbl_user','last_login_time','datetime');
	}

	public function safeDown()
	{
		$this->dropColumn('tbl_user','last_login_time');
	}
	
}