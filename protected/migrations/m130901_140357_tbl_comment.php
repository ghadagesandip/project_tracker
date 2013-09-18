<?php

class m130901_140357_tbl_comment extends CDbMigration
{
	/*
	public function up()
	{
	}

	public function down()
	{
		echo "m130901_140357_tbl_comments does not support migration down.\n";
		return false;
	}
	*/
	
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		$this->createTable('tbl_comment',array(
			'id'=>'pk',
			'bug_id'=>'integer',
			'comment'=>'text',
			'commented_by'=>'integer',
			'created'=>'datetime',
			'modified'=>'datetime'
		));
	}

	public function safeDown()
	{
		$this->dropTable('tbl_comment');
	}
	
}