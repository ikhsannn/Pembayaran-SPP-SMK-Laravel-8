<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Http\Request;

class UserOfficerRepository
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Get only high level user.
     * On example this method will return all user except student and order by name ascending.
     *
     * @return object
     */
    public function highLevelUserOrderBy($column, $direction = 'asc')
    {
        return $this->user->with('role')->where('role_id', '!=', 4)->orderBy($column, $direction);
    }

    /**
     * Find high level user by id.
     *
     * @param  integer $id
     * @return object
     */
    public function find($id)
    {
        return $this->user->findOrFail($id);
    }

    /**
     * Store high level user.
     *
     * @param  array $request
     * @return void
     */
    public function store(Request $request)
    {
        $user_officer = $this->user;
        $user_officer->role_id = $request->role_id;
        $user_officer->name = $request->name;
        $user_officer->email = $request->email;
        $user_officer->password = bcrypt($request->password);
        $user_officer->save();

        return;
    }

    /**
     * UPdate high level user.
     *
     * @param  array $request
     * @param  integer $id
     * @return void
     */
    public function update(Request $request, $id)
    {
        $user_officer = $this->find($id);
        $user_officer->role_id = $request->role_id_edit;
        $user_officer->name = $request->name_edit;
        $user_officer->email = $request->email_edit;
        $user_officer->password = bcrypt($request->password_edit);
        $user_officer->save();

        return;
    }
}
