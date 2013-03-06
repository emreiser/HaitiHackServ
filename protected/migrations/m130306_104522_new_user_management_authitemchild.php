<?php

class m130306_104522_new_user_management_authitemchild extends CDbMigration
{
	public function up()
	{
		
		$this->createTable('authitemchild', array(

			'parent' => 'VARCHAR (64) NOT NULL',
			'child' => 'VARCHAR (64) NOT NULL',

        ));
        
        $this->createIndex('authitemchild_pk', 'authitemchild', 'parent,child', true);	
        $this->createIndex('authitemchild_child', 'authitemchild', 'child', false);	
	
	}

	public function down()
	{

        $this->dropIndex('authitemchild_pk');
        $this->dropIndex('authitemchild_child');
        $this->dropTable('authitemchild');	
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}