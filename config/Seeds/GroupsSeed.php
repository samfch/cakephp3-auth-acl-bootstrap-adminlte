<?php
use Phinx\Seed\AbstractSeed;

/**
 * Groups seed.
 */
class GroupsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = array(
          array(
              'name'    => 'Administrator',			  
              'created' => date('Y-m-d H:i:s'),
			  'modified'	=> date('Y-m-d H:i:s'),
          ),
		  array(
              'name'    => 'Manager',			  
              'created' => date('Y-m-d H:i:s'),
			  'modified'	=> date('Y-m-d H:i:s'),
          ),
		  array(
              'name'    => 'User',			  
              'created' => date('Y-m-d H:i:s'),
			  'modified'	=> date('Y-m-d H:i:s'),
          ),
        );

        $table = $this->table('groups');
        $table->insert($data)->save();
    }
}
