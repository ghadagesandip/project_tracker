<?php

class m130901_135226_tbl_project extends CDbMigration
{
	/*
	public function up()
	{
	}

	public function down()
	{
		echo "m130901_135226_tbl_project does not support migration down.\n";
		return false;
	}
	*/
	
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		$this->createTable('tbl_project',array(
			'id'=>'pk',
			'name'=>'string NOT NULL',
			'is_closed'=>'boolean',
			'created'=>'datetime',
			'modified'=>'datetime'
		));
	}

	public function safeDown()
	{
	}
	
}