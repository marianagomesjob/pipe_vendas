<?php

use Phinx\Migration\AbstractMigration;

class CreateProposta extends AbstractMigration
{
    public function up()
    {
        $this -> table ('pv_proposta')
        ->addColumn('id_usuario', 'integer')
        ->addColumn('cliente', 'string')
        ->addColumn('fornecimento', 'string')

        ->save();
    }
    public function down()
    {
        $this-> dropTable('pv_proposta');
    }       
}
