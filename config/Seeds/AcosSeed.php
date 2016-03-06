<?php
use Phinx\Seed\AbstractSeed;

/**
 * Acos seed.
 */
class AcosSeed extends AbstractSeed
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
              'model' 		=> NULL,
			  'foreign_key'	=> NULL,
			  'alias'		=> 'controllers',
			  'lft'			=> 1,
			  'rght'		=> 66,
          ),
		  // CONTROLLER : GROUPS
		  array(
              'parent_id'	=> 1,			  
              'model' 		=> NULL,
			  'foreign_key'	=> NULL,
			  'alias'		=> 'Groups',
			  'lft'			=> 2,
			  'rght'		=> 13,
          ),
		  array(
              'parent_id'	=> 2,			  
              'model' 		=> NULL,
			  'foreign_key'	=> NULL,
			  'alias'		=> 'index',
			  'lft'			=> 3,
			  'rght'		=> 4,
          ),
		  array(
              'parent_id'	=> 2,			  
              'model' 		=> NULL,
			  'foreign_key'	=> NULL,
			  'alias'		=> 'view',
			  'lft'			=> 5,
			  'rght'		=> 6,
          ),
		  array(
              'parent_id'	=> 2,			  
              'model' 		=> NULL,
			  'foreign_key'	=> NULL,
			  'alias'		=> 'add',
			  'lft'			=> 7,
			  'rght'		=> 8,
          ),
		  array(
              'parent_id'	=> 2,			  
              'model' 		=> NULL,
			  'foreign_key'	=> NULL,
			  'alias'		=> 'edit',
			  'lft'			=> 9,
			  'rght'		=> 10,
          ),
		  array(
              'parent_id'	=> 2,			  
              'model' 		=> NULL,
			  'foreign_key'	=> NULL,
			  'alias'		=> 'delete',
			  'lft'			=> 11,
			  'rght'		=> 12,
          ),
		  // CONTROLLER : PAGES
		  array(
              'parent_id'	=> 1,			  
              'model' 		=> NULL,
			  'foreign_key'	=> NULL,
			  'alias'		=> 'Pages',
			  'lft'			=> 14,
			  'rght'		=> 17,
          ),
		  array(
              'parent_id'	=> 8,			  
              'model' 		=> NULL,
			  'foreign_key'	=> NULL,
			  'alias'		=> 'display',
			  'lft'			=> 15,
			  'rght'		=> 16,
          ),
		  // CONTROLLER : USERS
		  array(
              'parent_id'	=> 1,			  
              'model' 		=> NULL,
			  'foreign_key'	=> NULL,
			  'alias'		=> 'Users',
			  'lft'			=> 18,
			  'rght'		=> 35,
          ),
		  array(
              'parent_id'	=> 10,			  
              'model' 		=> NULL,
			  'foreign_key'	=> NULL,
			  'alias'		=> 'signup',
			  'lft'			=> 19,
			  'rght'		=> 20,
          ),
		  array(
              'parent_id'	=> 10,			  
              'model' 		=> NULL,
			  'foreign_key'	=> NULL,
			  'alias'		=> 'login',
			  'lft'			=> 21,
			  'rght'		=> 22,
          ),
		  array(
              'parent_id'	=> 10,			  
              'model' 		=> NULL,
			  'foreign_key'	=> NULL,
			  'alias'		=> 'logout',
			  'lft'			=> 23,
			  'rght'		=> 24,
          ),
		  array(
              'parent_id'	=> 10,			  
              'model' 		=> NULL,
			  'foreign_key'	=> NULL,
			  'alias'		=> 'index',
			  'lft'			=> 25,
			  'rght'		=> 26,
          ),
		  array(
              'parent_id'	=> 10,			  
              'model' 		=> NULL,
			  'foreign_key'	=> NULL,
			  'alias'		=> 'view',
			  'lft'			=> 27,
			  'rght'		=> 28,
          ),
		  array(
              'parent_id'	=> 10,			  
              'model' 		=> NULL,
			  'foreign_key'	=> NULL,
			  'alias'		=> 'add',
			  'lft'			=> 29,
			  'rght'		=> 30,
          ),
		  array(
              'parent_id'	=> 10,			  
              'model' 		=> NULL,
			  'foreign_key'	=> NULL,
			  'alias'		=> 'edit',
			  'lft'			=> 31,
			  'rght'		=> 32,
          ),
		  array(
              'parent_id'	=> 10,			  
              'model' 		=> NULL,
			  'foreign_key'	=> NULL,
			  'alias'		=> 'delete',
			  'lft'			=> 33,
			  'rght'		=> 34,
          ),
		  // CONTROLLER : Acl
		  array(
              'parent_id'	=> 1,			  
              'model' 		=> NULL,
			  'foreign_key'	=> NULL,
			  'alias'		=> 'Acl',
			  'lft'			=> 36,
			  'rght'		=> 37,
          ),
		  // CONTROLLER : AdminLTEBakeOverride
		  array(
              'parent_id'	=> 1,			  
              'model' 		=> NULL,
			  'foreign_key'	=> NULL,
			  'alias'		=> 'AdminLTEBakeOverride',
			  'lft'			=> 38,
			  'rght'		=> 39,
          ),
		  // CONTROLLER : Bake
		  array(
              'parent_id'	=> 1,			  
              'model' 		=> NULL,
			  'foreign_key'	=> NULL,
			  'alias'		=> 'Bake',
			  'lft'			=> 40,
			  'rght'		=> 41,
          ),
		  // CONTROLLER : DebugKit
		  array(
              'parent_id'	=> 1,			  
              'model' 		=> NULL,
			  'foreign_key'	=> NULL,
			  'alias'		=> 'DebugKit',
			  'lft'			=> 42,
			  'rght'		=> 57,
          ),
		  array(
              'parent_id'	=> 22,			  
              'model' 		=> NULL,
			  'foreign_key'	=> NULL,
			  'alias'		=> 'Panels',
			  'lft'			=> 43,
			  'rght'		=> 48,
          ),
		  array(
              'parent_id'	=> 23,			  
              'model' 		=> NULL,
			  'foreign_key'	=> NULL,
			  'alias'		=> 'index',
			  'lft'			=> 44,
			  'rght'		=> 45,
          ),
		  array(
              'parent_id'	=> 23,			  
              'model' 		=> NULL,
			  'foreign_key'	=> NULL,
			  'alias'		=> 'view',
			  'lft'			=> 46,
			  'rght'		=> 47,
          ),
		  array(
              'parent_id'	=> 22,			  
              'model' 		=> NULL,
			  'foreign_key'	=> NULL,
			  'alias'		=> 'Requests',
			  'lft'			=> 49,
			  'rght'		=> 52,
          ),
		  array(
              'parent_id'	=> 26,			  
              'model' 		=> NULL,
			  'foreign_key'	=> NULL,
			  'alias'		=> 'view',
			  'lft'			=> 50,
			  'rght'		=> 51,
          ),
		  array(
              'parent_id'	=> 22,			  
              'model' 		=> NULL,
			  'foreign_key'	=> NULL,
			  'alias'		=> 'Toolbar',
			  'lft'			=> 53,
			  'rght'		=> 56,
          ),
		  array(
              'parent_id'	=> 28,			  
              'model' 		=> NULL,
			  'foreign_key'	=> NULL,
			  'alias'		=> 'clearCache',
			  'lft'			=> 54,
			  'rght'		=> 55,
          ),
		  // CONTROLLER : Migrations
		  array(
              'parent_id'	=> 1,			  
              'model' 		=> NULL,
			  'foreign_key'	=> NULL,
			  'alias'		=> 'Migrations',
			  'lft'			=> 58,
			  'rght'		=> 59,
          ),
		  // CONTROLLER : Cake3Upload
		  array(
              'parent_id'	=> 1,			  
              'model' 		=> NULL,
			  'foreign_key'	=> NULL,
			  'alias'		=> 'Xety\Cake3Upload',
			  'lft'			=> 60,
			  'rght'		=> 61,
          ),
		  // CONTROLLER : Tests
		  array(
              'parent_id'	=> 1,			  
              'model' 		=> NULL,
			  'foreign_key'	=> NULL,
			  'alias'		=> 'Tests',
			  'lft'			=> 62,
			  'rght'		=> 65,
          ),
		  array(
              'parent_id'	=> 32,			  
              'model' 		=> NULL,
			  'foreign_key'	=> NULL,
			  'alias'		=> 'index',
			  'lft'			=> 63,
			  'rght'		=> 64,
          ),
        );
		
        $table = $this->table('acos');
        $table->insert($data)->save();
    }
}
