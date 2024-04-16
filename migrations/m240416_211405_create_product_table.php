<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product}}`.
 */
class m240416_211405_create_product_table extends Migration
{
	/**
	 * {@inheritdoc}
	 */
	public function safeUp()
	{
		$this->createTable('{{%product}}', [
			'id' => $this->primaryKey(),
			'code' => $this->integer(),
			'name' => $this->string(),
			'price' => $this->float(),
			'quantity' => $this->integer(),
			'unit' => $this->string(),
			'sum' => $this->float(),
		]);
	}

	/**
	 * {@inheritdoc}
	 */
	public function safeDown()
	{
		$this->dropTable('{{%product}}');
	}
}
