<?php

class m130901_134944_tbl_bug_status extends CDbMigration
{
	/*
	public function up()
	{
	}

	public function down()
	{
		echo "m130901_134944_tbl_bug_status does not support migration down.\n";
		return false;
	}
	*/
	
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		$this->createTable('tbl_bug_status',array(
			'id'=>'pk',
			'bug_status'=>'string NOT NULL',
			'created'=>'datetime',
			'modified'=>'datetime'
		));
	}

	public function safeDown()
	{
		$this->dropTable('tbl_bug_status');
	}
	
}