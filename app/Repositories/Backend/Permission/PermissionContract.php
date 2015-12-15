<?php

namespace App\Repositories\Backend\Permission;

interface PermissionContract
{

    /**
     * @param  $id
     * @param  bool    $withRoles
     * @return mixed
     */
    public function find($id, $withRoles = false);
    /**
     * @param  $per_page
     * @param  string      $order_by
     * @param  string      $sort
     * @return mixed
     */
    public function getPermissionsPaginated($per_page, $order_by = 'id', $sort = 'asc');
    /**
     * @param  string  $order_by
     * @param  string  $sort
     * @param  bool    $withRoles
     * @return mixed
     */
    public function getAllPermissions($order_by = 'id', $sort = 'asc', $withRoles = true);

    /**
     * @param  $input
     * @param  $roles
     * @return mixed
     */
    public function create($input, $roles);

    /**
     * @param  $id
     * @param  $input
     * @return mixed
     */
    public function update($id, $input);
    /**
     * @param  $id
     * @return mixed
     */
    public function destroy($id);

}