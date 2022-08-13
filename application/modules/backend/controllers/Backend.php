<?php defined('BASEPATH') or exit('No direct script access allowed');


class Backend extends BackendController
{
    public function index()
    {
        $this->template('index', $this->data, true);
    }
}
