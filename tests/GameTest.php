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
            $name = "Minecraft";
            $test_game = new Game($name);
            //Act
            $test_game->save();
            //Assert
            $result = Game::getAll();
            $this->assertEquals($test_game, $result[0]);
        }

        // function test_getAll()
        // {
        //     //Arrange
        //     $name = "Starcraft";
        //     $name2 = "water the stars";
        //     $test_game = new Game($name);
        //     $test_game->save();
        //     $test_game = new Game($name2);
        //     $test_game->save();
        //     //Act
        //     $result = Task::getAll();
        //     //Assert
        //     $this->assertEquals([$test_game, $test_game2], $result);
        // }

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
