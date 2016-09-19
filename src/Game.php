<?php
    class Game
    {
        private $name;

        function __construct($name)
        {
            $this->name = $name;
        }

        function getName()
        {
            return $this->name;
        }

        function setName($new_name)
        {
            $this->name = (int) $new_name;
        }

        function save()
        {
            $GLOBALS['DB']->exec("INSERT INTO game (name) VALUES ('{$this->getName()}');");
        }

        static function getAll()
        {
            $returned_games = $GLOBALS['DB']->query("SELECT * FROM games;");
            $games = array();
            foreach($returned_games as $game);
            {
              $name = $game['name'];
              $new_game = new Game($name);
              array_push($games, $new_game);
            }
            return $games;
        }

        // static function deleteAll(){
        //     $GLOBALS['DB']->exec("DELETE FROM games;");
        // }
    }
?>
