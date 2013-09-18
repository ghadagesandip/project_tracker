<?php

class m130901_133515_tbl_role extends CDbMigration
{
	/*public function up()
	{
	}

	public function down()
	{
		echo "m130901_133515_tbl_role does not support migration down.\n";
		return false;
	}
	*/
	
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		$this->createTable('tbl_role', array(
            'id' => 'pk',
            'name' => 'string NOT NULL',
            
        ));
	}

	public function safeDown()
	{
		$this->dropTable('tbl_role');
	}
	
}