<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Admin_Login_Table extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'admin_id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'admin_type' => array(
                                'type' => 'CHAR',
                                'constraint' => '1',
                                'null' => TRUE, 
                        ),
                        'username' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'first_name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'last_name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'password' => array(
                                'type' => 'varchar',
                                'constraint' => '255',
                                'null' => TRUE,
                        ),
                        'add_no_gym' => array(
                                'type' => 'INT',
                                'null' => FALSE,
                                'dafault' => 1,
                        ),
                        'created_at' => array(
                                'type' => 'INT',
                                'null' => TRUE,
                                'constraint' => '100'
                        ),
                        'update_at' => array(
                                'type' => 'INT',
                                'null' => TRUE,
                                'constraint' => '100'
                        ),

                ));
                $this->dbforge->add_key('admin_id', TRUE);
                $this->dbforge->create_table('admin_login');
                $adminInsertData=[
                        'admin_type' => 's',
                        'username'   => 'deepinder',
                        'first_name' => 'deepinder',
                        'last_name'  => 'singh',
                        'password'   => '$2y$10$O0XIQNWJZ0dT9RCTJpKkA.U.HCFDIHzFgiUPF4oJMncoqdpIFkNEC',    
                        'add_no_gym' => '10',
                        'created_at' => '1631533630',
                        'update_at' => '1631533630',   

                ];
                $this->db->insert('admin_login',$adminInsertData);
        }

        public function down()
        {
                $this->dbforge->drop_table('admin_login');
        }
}