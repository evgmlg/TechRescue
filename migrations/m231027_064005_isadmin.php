<?php

use yii\db\Migration;

/**
 * Class m231027_064005_isadmin
 */
class m231027_064005_isadmin extends Migration
{
    /**
     * {@inheritdoc}
     */

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this -> addColumn('users', 'sex', $this -> integer());
    }

    public function down()
    {
        $this -> dropColumn('users', 'sex');
    }
    
}
