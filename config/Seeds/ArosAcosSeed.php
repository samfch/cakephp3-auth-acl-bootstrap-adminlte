<?php
use Phinx\Seed\AbstractSeed;

/**
 * ArosAcos seed.
 */
class ArosAcosSeed extends AbstractSeed
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
              'aro_id'		=> '1',
			  'aco_id'		=> '1',
			  '_create'		=> '1',
			  '_read'		=> '1',
			  '_update'		=> '1',
			  '_delete'		=> '1',
          ),
		  array(
              'aro_id'		=> '2',
			  'aco_id'		=> '1',
			  '_create'		=> '-1',
			  '_read'		=> '-1',
			  '_update'		=> '-1',
			  '_delete'		=> '-1',
          ),
		  array(
              'aro_id'		=> '3',
			  'aco_id'		=> '1',
			  '_create'		=> '-1',
			  '_read'		=> '-1',
			  '_update'		=> '-1',
			  '_delete'		=> '-1',
          ),
		  array(
              'aro_id'		=> '1',
			  'aco_id'		=> '13',
			  '_create'		=> '1',
			  '_read'		=> '1',
			  '_update'		=> '1',
			  '_delete'		=> '1',
          ),
		  array(
              'aro_id'		=> '3',
			  'aco_id'		=> '33',
			  '_create'		=> '1',
			  '_read'		=> '1',
			  '_update'		=> '1',
			  '_delete'		=> '1',
          )
        );


        $table = $this->table('aros_acos');
        $table->insert($data)->save();
    }
}
