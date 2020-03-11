<?php

namespace agungsugiarto\boilerplate\Controllers\Users;

use agungsugiarto\boilerplate\Controllers\BaseController;
use agungsugiarto\boilerplate\Models\MenuModel;

class MenuController extends BaseController
{
    protected $menu;

    public function __construct()
    {
        $this->menu = new MenuModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Menu'
        ];

        if ($this->request->isAJAX()) {
            return $this->response->setJSON([
                'success'  => true,
                'messages' => 'success get data',
                'data'     => menu(),
            ]);
        }

        return view('agungsugiarto\boilerplate\Views\Menu\index', $data);
    }
}
