<?php

class m130901_135817_tbl_bug extends CDbMigration
{
	/*
	public function up()
	{
	}

	public function down()
	{
		echo "m130901_135817_tbl_bug does not support migration down.\n";
		return false;
	}
	*/
	
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		$this->createTable('tbl_bug',array(
			'id'=>'pk',
			'project_id'=>'integer',
			'title'=>'string NOT NULL',
			'description'=>'text',
			'bug_type_id'=>'integer',
			'bug_status_id'=>'integer',
			'assigned_by'=>'integer',
			'assigned_to'=>'integer',
			'due_date'=>'date',
			'closed_date'=>'date',
			'created'=>'datetime',
			'modified'=>'datetime'
		));
	}

	public function safeDown()
	{
		$this->dropTable('tbl_bug');
	}
	
}