<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB;

class GamesController extends Controller
{
    public function Index() {
        $collection = (new MongoDB\Client)->SteamGames->Games;
        $game = $collection->find();
        return view('Admin.Games.index', [ "game" => $game ]);
    }

    public function GamesStore() {
        $collection = (new MongoDB\Client)->SteamGames->Games;
        $productCount = $collection->count();
        $page = request("pg") == 0 ? 1 : request("pg");
        $game = $collection->find([], [ "limit" => 1000, "skip" => ($page - 1) * 1000 ]);
        return view('Games.index', [ "game" => $game, "productCount" => $productCount ]);
    }

    public function GamesDetails($id) {
        $collection = (new MongoDB\Client)->SteamGames->Games;
        $game = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId($id) ]);
        return view("Games.Details", ["game" => $game]);
    }


    public function Show($id) { //Details
        $collection = (new MongoDB\Client)->SteamGames->Games;
        $game = $collection->findOne([ "_id" => new \MongoDB\BSON\ObjectId($id) ]);
        return view('Admin.Games.details', [ "game" => $game ]);
    }

    public function Create() {
        $collection = (new MongoDB\Client)->SteamGames->Games;
        $game = $collection->find();
        return view('Admin.Games.create', [ "game" => $game ]);
    }

    public function Store() {
        $game = [
            "name" => request("name"),
            "developer" => request("developer"),
            "publisher" => request("publisher"),
            "platforms" => request("platforms"),
            "genres" => request("genres"),
            "price" => request("price"),
            "categories" => request("categories"),
        ];
        $collection = (new MongoDB\Client)->SteamGames->Games;
        $insertOneResult = $collection->insertOne($game);
        if ($insertOneResult->getInsertedCount() == 1) 
            return redirect('/admin/games')->with('mssg', request('name')." was added succesfuly.")->with('alerttype', "success");
            
    }

    public function Edit($id) {
        $collection = (new MongoDB\Client)->SteamGames->Games;
        $game = $collection->findOne([ "_id" => new \MongoDB\BSON\ObjectId($id) ]);
        return view('Admin.Games.edit', [ "game" => $game ] );
    }

    public function Update() {
        $collection = (new MongoDB\Client)->SteamGames->Games;
        $game = [
            "name" => request("name"),
            "developer" => request("developer"),
            "publisher" => request("publisher"),
            "platforms" => request("platforms"),
            "genres" => request("genres"),
            "price" => request("price"),
            "categories" => request("categories"),
        ];
        $updateOneResult = $collection->updateOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("productid"))
        ],[
            '$set' => $game
        ]);

        if($updateOneResult->getModifiedCount() == 1)
            return redirect("/admin/games/".request("productid"))->with('mssg', "Updated succesfuly.")->with("alerttype", "success");
    }

    public function Delete($id) {
        $collection = (new MongoDB\Client)->SteamGames->Games;
        $game = $collection->findOne([ "_id" => new \MongoDB\BSON\ObjectId($id) ]);
        return view('Admin.Games.delete', [ "game" => $game ]);
    }

    public function Remove() {
        $collection = (new MongoDB\Client)->SteamGames->Games;
        $gamename = request('name');
        $deletOneResult = $collection->deleteOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("productid"))
        ]);

        if($deletOneResult->getDeletedCount() == 1)
            return redirect("/admin/games")->with("mssg", $gamename." was deleted succesfuly.")->with("alerttype", "success");
    }
}
