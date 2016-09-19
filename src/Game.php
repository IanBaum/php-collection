<?php
    class Game
    {
        private $game_id;
        private $name;

        function __construct($game_id, $name)
        {
            $this->game_id = $game_id;
            $this->name = $name;
        }

        function getGame_Id()
        {
            return $this->game_id;
        }

        function setGame_Id($new_game_id)
        {
            $this->game_id = (int) $new_game_id;
        }

        function save()
        {
          // array_push();
        }
    }
?>
