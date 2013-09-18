<?php

class m130901_134607_tbl_bug_type extends CDbMigration
{	
	/*	
	public function up()
	{
	}

	public function down()
	{
		echo "m130901_134607_tbl_bug_type does not support migration down.\n";
		return false;
	}
	*/
	
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		$this->createTable('tbl_bug_type',array(
			'id'=>'pk',
			'bug_type'=>'string NOT NULL',
			'created'=>'datetime',
            'modified'=>'datetime',
		));
	}

	public function safeDown()
	{
		$this->dropTable('tbl_bug_type');
	}
	
}