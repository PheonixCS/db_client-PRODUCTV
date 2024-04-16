<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%organizations}}`.
 */
class m240416_210807_create_organizations_table extends Migration
{
	/**
	 * {@inheritdoc}
	 */
	public function safeUp()
	{
		$this->createTable('{{%organizations}}', [
			'id' => $this->primaryKey(),
			'contact_person' => $this->string(),
			'Phone1' => $this->string(),
			'Phone2' => $this->string(),
			'Email' => $this->string(),
			'type' => $this->string(),
			'company' => $this->string(),
			'iin' => $this->string(),
			'actual_address' => $this->string(),
		]);
	}

	/**
	 * {@inheritdoc}
	 */
	public function safeDown()
	{
		$this->dropTable('{{%organizations}}');
	}
}
