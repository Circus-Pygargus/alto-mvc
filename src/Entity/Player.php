<?php

namespace App\Entity;

class Player {

    /* ################### VARIABLES ################# */

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
    private $score;


    /**
     * @var bool
     */
    private $hasTeam;

    /**
     * @var string
     */
    private $teamName;



    /* ################## getters and setters ################ */


    /**
     * Get the value of name
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
     * Set tyhe value of color
     * 
     * @return string
     */
    public function setColor (string $color) 
    {
        $this->color = $color;

        return $this;
    }


    /**
     * Get the value of score
     * 
     * @return int
     */
    public function getScore ()
    {
        return $this->score;
    }

    /**
     * Set the vaue of color
     * 
     * @return int
     */
    public function setScore (int $score)
    {
        $this->color = $score;
    }


    /**
     * Get the value of hasTeam
     * 
     * @return bool
     */
    public function getHasTeam ()
    {
        return $this->hasTeam;
    }

    /**
     * Set the value of hasTeam
     * 
     * @return bool
     */
    public function setHasTeam (bool $hasTeam)
    {
        $this->hasTeam = $hasTeam;

        return $this;
    }



    /**
     * Get the value of teamName
     * 
     * @return string
     */
    public function getTeamName ()
    {
        return $this->teamName;
    }

    /**
     * Set the value of teamName
     * 
     * @return string
     */
    public function setTeamName (string $teamName)
    {
        $this->teamName = $teamName;

        return $this;
    }
}