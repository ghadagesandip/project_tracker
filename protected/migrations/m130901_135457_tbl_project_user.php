<?php

class m130901_135457_tbl_project_user extends CDbMigration
{
	/*
	public function up()
	{
	}

	public function down()
	{
		echo "m130901_135457_tbl_project_user does not support migration down.\n";
		return false;
	}
	*/
	
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		$this->createTable('tbl_project_user',array(
			'id'=>'pk',
			'project_id'=>'integer',
			'user_id'=>'integer'
		));
	}

	public function safeDown()
	{
		$this->dropTable('tbl_project_user');
	}
	
}