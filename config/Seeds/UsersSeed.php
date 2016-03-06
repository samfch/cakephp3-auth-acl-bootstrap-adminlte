<?php
use Phinx\Seed\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
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
              'username'    => 'admin',
			  'password'	=> '$2y$10$rQd32Jdwh3FNarXquvp11.gMyjLMxR.p8FRe0kHPZJiMY8JdFUK7u',
			  'group_id'	=> '1',
			  'email'		=> 'admin@admin.com',
			  'name'		=> 'Administrator',
			  'surname'		=> 'Administrator',
			  'modified'	=> date('Y-m-d H:i:s'),
              'created' 	=> date('Y-m-d H:i:s'),
          ),
		  array(
              'username'    => 'client',
			  'password'	=> '$2y$10$Likabdu32lyTR8SQMr.rO..7iPZdZrZdW0xG/zUdsmHqWykub9sy.',
			  'group_id'	=> '3',
			  'email'		=> 'client@client.com',
			  'name'		=> 'Client',
			  'surname'		=> 'Client',
			  'modified'	=> date('Y-m-d H:i:s'),
              'created' 	=> date('Y-m-d H:i:s'),
          )
        );

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
