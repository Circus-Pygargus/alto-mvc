<?php

namespace App\Entity;


class Team 
{

    /* ############# VARIABLES ############## */

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $color;

    /**
     * @var int
     */
    private $playersNbr;

    /**
     * @var array
     */
    private $players;




    /* ################ FUNCTIONS ################ */


    /**
     * Get the vaue of name
     * 
     * @return string
     */
    public function getName ()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     * 
     * @return string
     */
    public function setName (string $name)
    {
        $this->name = $name;

        return $this;
    }


    /**
     * Get the value of color
     * 
     * @return string
     */
    public function getColor ()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     * 
     * @return string
     */
    public function setColor (string $color)
    {
        $this->color = $color;

        return $this;
    }


    /**
     * Get the value of playersNbr
     * 
     * @return int
     */
    public function getPlayersNbr ()
    {
        return $this->playersNbr;
    }


    /**
     * Get the value of players
     * 
     * @return array
     */
    public function getPlayers ()
    {
        return $this->players;
    }


    /**
     * Add a player
     * 
     * @return array
     */
    public function addPlayer (player $player)
    {
        $this->players[$this->playersNbr] = $player;

        $this->playersNbr += 1;

        return $this;
    }
}