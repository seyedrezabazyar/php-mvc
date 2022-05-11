<?php

namespace App\Controllers;

use App\Models\Contact;
use App\Utilities\Validation;

class ContactController
{
    private $contactModel;

    public function __construct()
    {
        $this->contactModel = new Contact();
    }

    public function add()
    {
        global $request;
        $data['alreadyExists'] = false;
        # check if contact number already exists
        $count =  $this->contactModel->count(['mobile' => $request->input('mobile')]);

        if ($count) {
            $data['alreadyExists'] = true;
            view_die('contact.add-result', $data);
        }
        if (!Validation::is_valid_email($request->input('email'))) {
            $data = ['success' => false, 'message' => 'Invalid Email Address'];
            view_die('contact.add-result', $data);
        }
        # create new contact
        $contact_id  =  $this->contactModel->create([
            'name' => $request->input('name'),
            'mobile' => $request->input('mobile'),
            'email' => $request->input('email')
        ]);
        $data['contact_id'] = $contact_id;
        $data['success'] = true;
        $data['message'] = "Contact with ID $contact_id created successfully";

        view('contact.add-result', $data);
    }
}
