<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use MongoDB;

class DescriptionController extends Controller
{

    public function DescriptionStore() {
        $collection = (new MongoDB\Client)->SteamGames->Description;
        $productCount = $collection->count();
        $page = request("pg") == 0 ? 1 : request("pg");
        $description = $collection->find([], [ "limit" => 1000, "skip" => ($page - 1) * 1000 ]);
        return view('Description.Index', [ "description" => $description, "productCount" => $productCount ]);
    }

    public function DescriptionDetails($id) {
        $collection = (new MongoDB\Client)->SteamGames->Description;
        $description = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId($id) ]);
        return view("Description.Details", ["description" => $description]);
    }

    public function Index() {
        $collection = (new MongoDB\Client)->SteamGames->Description;
        $description= $collection->find();
        return view('Admin.Description.index', [ "description" => $description ]);
    }

    public function Show($id) { //Details
        $collection = (new MongoDB\Client)->SteamGames->Description;
        $description= $collection->findOne([ "_id" => new \MongoDB\BSON\ObjectId($id) ]);
        return view('Admin.Description.details', [ "description" => $description ]);
    }

    public function Edit($id) {
        $collection = (new MongoDB\Client)->SteamGames->Description;
        $description = $collection->findOne([ "_id" => new \MongoDB\BSON\ObjectId($id) ]);
        return view('Admin.Description.edit', [ "description" => $description ] );
    }

    public function Update() {
        $collection = (new MongoDB\Client)->SteamGames->Description;
        $description = [
            "detailed_description" => request("detailed_description"),
            "about_the_game" => request("about_the_game"),
            "short_description" => request("short_description"),
        ];
        $updateOneResult = $collection->updateOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("productid"))
        ],[
            '$set' => $description
        ]);

        if($updateOneResult->getModifiedCount() == 1)
            return redirect("/admin/description/".request("productid"))->with('mssg', "Updated succesfuly.")->with("alerttype", "success");
    }

    public function Create() {
        $collection = (new MongoDB\Client)->SteamGames->Description;
        $description = $collection->find();
        return view('Admin.Description.create', [ "description" => $description ]);
    }

    public function Store() {
        $description = [
            "detailed_description" => request("detailed_description"),
            "about_the_game" => request("about_the_game"),
            "short_description" => request("short_description"),
        ];
        $collection = (new MongoDB\Client)->SteamGames->Description;
        $insertOneResult = $collection->insertOne($description);
        if ($insertOneResult->getInsertedCount() == 1) 
            return redirect('/admin/description')->with('mssg', request('name')." was added succesfuly.")->with('alerttype', "success");
            
    }

    public function Delete($id) {
        $collection = (new MongoDB\Client)->SteamGames->Description;
        $description = $collection->findOne([ "_id" => new \MongoDB\BSON\ObjectId($id) ]);
        return view('Admin.Description.delete', [ "description" => $description ]);
    }

    public function Remove() {
        $collection = (new MongoDB\Client)->SteamGames->Description;
        $descriptionname = request('name');
        $deletOneResult = $collection->deleteOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("productid"))
        ]);

        if($deletOneResult->getDeletedCount() == 1)
            return redirect("/admin/description")->with("mssg", $descriptionname." was deleted succesfuly.")->with("alerttype", "success");
    }
}
