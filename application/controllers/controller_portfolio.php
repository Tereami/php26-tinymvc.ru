<?php
class Controller_Portfolio extends Controller
{
    function __construct()
    {
        $this->model = new Model_Portfolio();
        $this->view = new View();
    }

    function action_default()
    {
        $data = $this->model->get_data();
        sort($data);
        $this->view->generate('view_portfolio.php', $data);
    }
}
