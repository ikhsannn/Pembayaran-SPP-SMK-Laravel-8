<?php

namespace App\Repositories;

use App\Models\Role;

class RoleRepository
{
    private $role_where_in = [1, 2, 3];
    private $role;

    public function __construct(Role $role)
    {
        $this->role = $role;
    }

    /**
     * Get Role Where in something. Example : role from 1 to 3 [1, 2, 3]
     * $column is a column name on database. Example : id, name, created_at etc..
     * 
     * @param  string $column
     * @param  array $data
     * @return object
     */
    public function roleWhereIn()
    {
        return $this->role->whereIn('id', $this->role_where_in);
    }
}
