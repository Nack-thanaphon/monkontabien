<?php defined('BASEPATH') or exit('No direct script access allowed');


class Tabien extends BackendController
{
    public function index()
    {
        $this->template('tabien/index', $this->data, true);
    }
}
