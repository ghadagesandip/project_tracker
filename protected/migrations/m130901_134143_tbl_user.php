<?php

class m130901_134143_tbl_user extends CDbMigration
{
	/*	
	public function up()
	{
	}

	public function down()
	{
		echo "m130901_134143_tbl_user does not support migration down.\n";
		return false;
	}
	*/
	
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		$this->createTable('tbl_user', array(
            'id' => 'pk',
            'role_id'=>'integer',
            'name' => 'string NOT NULL',
            'email'=> 'string NOT NULL',
            'username'=>'string NOT NULL',
            'password'=>'string NOT NULL',
            'created'=>'datetime',
            'modified'=>'datetime',
        ));
	}

	public function safeDown()
	{
		$this->dropTable('tbl_user');
	}
	
}