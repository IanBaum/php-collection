<?php
    require_once "src/Game.php";

    $server = 'mysql:host=localhost:8889;dbname=collections_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class GameTest extends PHPUnit_Framework_TestCase
    {
        function test_save()
        {
            //Arrange
            $test_name = "Minecraft";
            $test_game = new Game($test_name);
            $test_game->save();
            //Act
            $result = Game::getAll();
            //Assert
            $this->assertEquals($test_name, $result);
        }

        function test_getAll(){

              $test_name = "Starcraft";
              $test_name2 = "water the stars";
              $test_game = new Game($test_name);
        }

        // function test_deleteAll(){
        //     //Arrange
        //     $test_name = "Minecraft";
        //     $test_name2 = "Mine the Craft";
        //     $test_game = new Game($test_name);
        //     $test_game->save();
        //     $test_game2 = new Game($test_name2);
        //     $test_game2->save();
        //
        //     //Act
        //     Game::deleteAll();
        //
        //     //Assert
        //     $result = Game::getAll();
        //     $this->assertEquals([], $result);
        // }



    }
?>
