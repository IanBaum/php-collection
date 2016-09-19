<?php
    class Players
    {
        private $player_id;
        private $name;
        private $screen_name;

        function __construct($player_id, $name, $screen_name)
        {
            $this->player_id = $player_id;
            $this->name = $name;
            $this->screen_name = $screen_name;
        }
    }
?>
