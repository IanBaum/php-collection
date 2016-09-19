<?php
    class GamePlayers
    {
        private $game_id;
        // private $player_id;

        function __construct($game_id)
        {
            $this->game_id = $game_id;
            // $this->player_id = $player_id;
        }

        // function getPlayer_Id()
        // {
        //     return $this->player_id;
        // }
        //
        // function setPlayer_Id($new_player_id)
        // {
        //     $this->player_id = (int) $new_player_id;
        // }

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
          array_push()
        }

        function fetchIds($game_id)
        {

        }
    }
?>
