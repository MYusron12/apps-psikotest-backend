<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Codeigniter\API\ResponseTrait;
use App\Models\UsersModel;
use App\Models\UserAccessMenuModel;
use App\Models\UserMenuModel;
use App\Models\UserRoleModel;
use App\Models\UserSubMenuModel;

class MenuManagement extends BaseController
{
    use ResponseTrait;
    private $Users;
    private $UserMenu;
    private $UserAccessMenu;
    private $UserSubMenu;
    private $UserRole;
    public function __construct()
    {
        $this->Users = new UsersModel();
        $this->UserMenu = new UserMenuModel();
        $this->UserAccessMenu = new UserAccessMenuModel();
        $this->UserSubMenu = new UserSubMenuModel();
        $this->UserRole = new UserRoleModel();
    }
    public function userMenu()
    {
        return $this->respond([
            'user_menu' => $this->UserMenu->findAll(),
            'user_sub_menu' => $this->UserSubMenu->findAll()
        ], 200);
    }
}