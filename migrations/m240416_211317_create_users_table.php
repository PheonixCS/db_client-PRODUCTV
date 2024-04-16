<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users}}`.
 */
class m240416_211317_create_users_table extends Migration
{
	/**
	 * {@inheritdoc}
	 */
	public function safeUp()
	{
		$this->createTable('{{%users}}', [
			'id' => $this->primaryKey(),
			'name' => $this->string()->unique(),
			'password' => $this->string(),
			'email' => $this->string(),
			'role' => $this->string(),
		]);
	}

	/**
	 * {@inheritdoc}
	 */
	public function safeDown()
	{
		$this->dropTable('{{%users}}');
	}
}
