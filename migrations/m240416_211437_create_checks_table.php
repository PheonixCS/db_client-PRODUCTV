<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%checks}}`.
 */
class m240416_211437_create_checks_table extends Migration
{
	/**
	 * {@inheritdoc}
	 */
	public function safeUp()
	{
		$this->createTable('{{%checks}}', [
			'id' => $this->primaryKey(),
			'who' => $this->string(),
			'payment_type' => $this->string(),
			'check_number' => $this->integer(),
			'check_creation_date' => $this->timestamp(),
			'product_list' => $this->integer(),
			'check_sum' => $this->float(),
			'delivery_address' => $this->string(),
			'organization' => $this->integer(),
			'comment_on_the_delivery_stage' => $this->string(),
			'delivery_date_and_time' => $this->timestamp(),
			'cost_of_delivery' => $this->float(),
			'delivery_type' => $this->string(),
			'delivery_stage' => $this->string(),
			'suppliers' => $this->integer(),
			'profit' => $this->float(),
			'comment' => $this->string(),
		]);

		$this->addForeignKey(
			'fk-checks-users',
			'checks',
			'who',
			'users',
			'name',
			'CASCADE'
		);

		$this->addForeignKey(
			'fk-checks-product',
			'checks',
			'product_list',
			'product',
			'id',
			'CASCADE'
		);

		$this->addForeignKey(
			'fk-checks-organizations',
			'checks',
			'organization',
			'organizations',
			'id',
			'CASCADE'
		);

		$this->addForeignKey(
			'fk-checks-suppliers',
			'checks',
			'suppliers',
			'suppliers',
			'id',
			'CASCADE'
		);
	}

	/**
	 * {@inheritdoc}
	 */
	public function safeDown()
	{
		$this->dropForeignKey('fk-checks-users', 'checks');
		$this->dropForeignKey('fk-checks-product', 'checks');
		$this->dropForeignKey('fk-checks-organizations', 'checks');
		$this->dropForeignKey('fk-checks-suppliers', 'checks');

		$this->dropTable('{{%checks}}');
	}
}
