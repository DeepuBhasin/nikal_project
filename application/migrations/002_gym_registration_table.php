<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Gym_Registration_Table extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'gym_id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'gym_name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'gym_address' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '225',
                                'null' => TRUE,
                        ),
                        'gym_status' => array(
                                'type' => 'INT',
                                'constraint' => '1',
                                'default' => '1',
                        ),
                        'created_by' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                        ),
                        'created_at' => array(
                                'type' => 'INT',
                                'null' => TRUE,
                                'constraint' => '100'
                        ),
                        'updated_by' => array(
                                'type' => 'INT',
                                'null' => TRUE,
                                'constraint' => '5'
                        ),
                        'updated_at' => array(
                                'type' => 'INT',
                                'null' => TRUE,
                                'constraint' => '100'
                        ),
                        'CONSTRAINT fk_created_by FOREIGN KEY (created_by) REFERENCES admin_login(admin_id)'
                        
                ));
                $this->dbforge->add_key('gym_id', TRUE);
                $this->dbforge->create_table('gym_regsitration');
        }

        public function down()
        {
                $this->dbforge->drop_table('gym_regsitration');
        }
}