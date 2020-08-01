<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use MongoDB;

class RequirementsController extends Controller
{
    public function RequirementsStore() {
        $collection = (new MongoDB\Client)->SteamGames->Requirements;
        $productCount = $collection->count();
        $page = request("pg") == 0 ? 1 : request("pg");
        $requirements = $collection->find([], [ "limit" => 1000, "skip" => ($page - 1) * 1000 ]);
        return view('Requirements.Index', [ "requirements" => $requirements, "productCount" => $productCount ]);
    }

    public function RequirementsDetails($id) {
        $collection = (new MongoDB\Client)->SteamGames->Requirements;
        $requirements = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId($id) ]);
        return view("Requirements.Details", ["requirements" => $requirements]);
    }

    public function Index() {
        $collection = (new MongoDB\Client)->SteamGames->Requirements;
        $requirements = $collection->find();
        return view('Admin.Requirements.index', [ "requirements" => $requirements ]);
    }

    public function Show($id) { //Details
        $collection = (new MongoDB\Client)->SteamGames->Requirements;
        $requirements = $collection->findOne([ "_id" => new \MongoDB\BSON\ObjectId($id) ]);
        return view('Admin.Requirements.details', [ "requirements" => $requirements ]);
    }

    public function Edit($id) {
        $collection = (new MongoDB\Client)->SteamGames->Requirements;
        $requirements = $collection->findOne([ "_id" => new \MongoDB\BSON\ObjectId($id) ]);
        return view('Admin.Requirements.edit', [ "requirements" => $requirements ] );
    }

    public function Update() {
        $collection = (new MongoDB\Client)->SteamGames->Requirements;
        $requirements = [
            "pc_requirements" => request("pc_requirements"),
            "mac_requirements" => request("mac_requirements"),
            "linux_requirements" => request("linux_requirements"),
            "minimum" => request("minimum"),
            "recommended" => request("recommended"),
        ];
        $updateOneResult = $collection->updateOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("productid"))
        ],[
            '$set' => $requirements
        ]);

        if($updateOneResult->getModifiedCount() == 1)
            return redirect("/admin/requirements/".request("productid"))->with('mssg', "Updated succesfuly.")->with("alerttype", "success");
    }

    public function Create() {
        $collection = (new MongoDB\Client)->SteamGames->Requirements;
        $requirements = $collection->find();
        return view('Admin.Requirements.create', [ "requirements" => $requirements ]);
    }

    public function Store() {
        $requirements = [
            "pc_requirements" => request("pc_requirements"),
            "mac_requirements" => request("mac_requirements"),
            "linux_requirements" => request("linux_requirements"),
            "minimum" => request("minimum"),
            "recommended" => request("recommended"),
        ];
        $collection = (new MongoDB\Client)->SteamGames->Requirements;
        $insertOneResult = $collection->insertOne($requirements);
        if ($insertOneResult->getInsertedCount() == 1) 
            return redirect('/admin/requirements')->with('mssg', request('name')." was added succesfuly.")->with('alerttype', "success");
            
    }

    public function Delete($id) {
        $collection = (new MongoDB\Client)->SteamGames->Requirements;
        $requirements = $collection->findOne([ "_id" => new \MongoDB\BSON\ObjectId($id) ]);
        return view('Admin.Requirements.delete', [ "requirements" => $requirements ]);
    }

    public function Remove() {
        $collection = (new MongoDB\Client)->SteamGames->Requirements;
        $reqname = request('name');
        $deletOneResult = $collection->deleteOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("productid"))
        ]);

        if($deletOneResult->getDeletedCount() == 1)
            return redirect("/admin/requirements")->with("mssg", $reqname." was deleted succesfuly.")->with("alerttype", "success");
    }
}
