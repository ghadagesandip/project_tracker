<?php

class m131027_140243_addColumn_role_to_project_user_table extends CDbMigration
{

/*
  	public function up()
	{
	}

	public function down()
	{
		echo "m131027_140243_addColumn_role_to_project_user_table does not support migration down.\n";
		return false;
	}
*/

	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
        $this->addColumn('tbl_project_user','role_id','integer');
	}

	public function safeDown()
	{
        $this->dropColumn('tbl_project_user','role_id');
	}

}