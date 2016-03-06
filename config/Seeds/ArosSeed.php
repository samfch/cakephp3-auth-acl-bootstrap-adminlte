<?php
use Phinx\Seed\AbstractSeed;

/**
 * Aros seed.
 */
class ArosSeed extends AbstractSeed
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
              'parent_id'	=> NULL,			  
              'model' 		=> 'Groups',
			  'foreign_key'	=> 1,
			  'alias'		=> 'Group-Administrator',
			  'lft'			=> 1,
			  'rght'		=> 4
          ),
		  array(
              'parent_id'	=> NULL,			  
              'model' 		=> 'Groups',
			  'foreign_key'	=> 2,
			  'alias'		=> 'Group-Manager',
			  'lft'			=> 5,
			  'rght'		=> 6
          ),
		  array(
              'parent_id'	=> NULL,			  
              'model' 		=> 'Groups',
			  'foreign_key'	=> 3,
			  'alias'		=> 'Group-Users',
			  'lft'			=> 7,
			  'rght'		=> 10
          ),
		  array(
              'parent_id'	=> 1,			  
              'model' 		=> 'Users',
			  'foreign_key'	=> 1,
			  'alias'		=> 'Administrator',
			  'lft'			=> 2,
			  'rght'		=> 3
          ),
		  array(
              'parent_id'	=> 3,			  
              'model' 		=> 'Users',
			  'foreign_key'	=> 2,
			  'alias'		=> 'Anonymous',
			  'lft'			=> 8,
			  'rght'		=> 9
          ),
		  
        );

        $table = $this->table('aros');
        $table->insert($data)->save();
    }
}
