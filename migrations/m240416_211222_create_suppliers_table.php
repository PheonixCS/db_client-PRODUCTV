<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%suppliers}}`.
 */
class m240416_211222_create_suppliers_table extends Migration
{
	/**
	 * {@inheritdoc}
	 */
	public function safeUp()
	{
		$this->createTable('{{%suppliers}}', [
			'id' => $this->primaryKey(),
			'company_name' => $this->string(),
			'web_site' => $this->string(),
			'phone' => $this->string(),
			'email' => $this->string(),
			'working_hours' => $this->string(),
			'warehouse_address' => $this->string(),
			'manager' => $this->string(),
			'B2B_login' => $this->string(),
			'B2B_password' => $this->string(),
			'delivery' => $this->string(),
			'return_policy' => $this->string(),
			'payment_method' => $this->string(),
			'VAT_processing' => $this->string(),
		]);
	}

	/**
	 * {@inheritdoc}
	 */
	public function safeDown()
	{
		$this->dropTable('{{%suppliers}}');
	}
}
