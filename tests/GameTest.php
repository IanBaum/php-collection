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
            $test_Game = new Game($test_name);
            $test_Game->save();
            //Act
            $result = Game::getAll();
            //Assert
            $this->assertEquals($test_name, $result);
        }

        

    }
?>
