<?php

namespace App\Controllers;

use App\Models\Contact;

class HomeController
{
    private $contactModel;

    public function __construct()
    {
        $this->contactModel = new Contact();
    }

    public function index()
    {
        global $request;
        $where = ['ORDER' => ["created_at" => "DESC"]];
        $search_keyword = $request->input('s');
        if (!is_null($request->input('s'))) {
            // $where["name[~]"] = $request->input('s');
            $where['OR'] = [
                "name[~]" => $search_keyword,
                "mobile[~]" => $search_keyword,
                "email[~]" => $search_keyword
            ];
        }
        $contacts = $this->contactModel->get('*', $where);
        $data = [
            'contacts' => $contacts,
            'search_keyword' => $search_keyword,
            'pageSize' => $this->contactModel->pageSize,
            'countAll' => $this->contactModel->getCountAllData()
        ];
        view('home.index', $data);
    }
}

// $faker = new \Faker\Generator();
        // $faker->addProvider(new \Faker\Provider\fa_IR\Person($faker));
        
        // $faker = \Faker\Factory::create();

        // echo $faker->name() . '<br>';
        // echo $faker->email() . '<br>';
        // echo $faker->phoneNumber() . '<br>';

        // for ($i = 0; $i < 1000; $i++) {
        //     $this->contactModel->create([
        //         'name' => $faker->name(),
        //         'mobile' => $faker->phoneNumber(),
        //         'email' => $faker->email()
        //     ]);
        // }