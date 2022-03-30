<?php
/*
 * Basic Controller
 * Loads the model & views
 */

class Controller
{
    // Load the model
    public function model($model)
    {
        // Require the model file
        require_once '../app/models/' . $model . '.php';
        // Init model file
        return new $model;
    }
    // Load the view
    public function view($view, $data = [])
    {
        // Check for view file
        if (file_exists('../app/views/' . $view . '.php')) {
            // Load the view file
            require_once '../app/views/' . $view . '.php';
        } else {
            // View does not exist
            die('View does not exist');
        }
    }
}
