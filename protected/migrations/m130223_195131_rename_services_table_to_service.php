<?php

class m130223_195131_rename_services_table_to_service extends CDbMigration
{
	public function up()
	{
	  $this->renameTable('services', 'service');
	}

	public function down()
	{
	  $this->renameTable('service', 'services');
	}
}
