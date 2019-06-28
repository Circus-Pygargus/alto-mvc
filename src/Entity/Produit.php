<?php


namespace App\Entity;

use App\Application\Database;

class Produit extends Database {

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $designation;

    /**
     * @var float
     */
    private $price;


    

    /**
     * Get the value of id
     *
     * @return  int
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param  int  $id
     *
     * @return  self
     */ 
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }



    /**
     * Get the value of designation
     *
     * @return  string
     */ 
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set the value of designation
     *
     * @param  string  $designation
     *
     * @return  self
     */ 
    public function setDesignation(string $designation)
    {
        $this->designation = $designation;

        return $this;
    }



    /**
     * Get the value of price
     *
     * @return  float
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @param  float  $price
     *
     * @return  self
     */ 
    public function setPrice(float $price)
    {
        $this->price = $price;

        return $this;
    }


    public function add (string $designation, float $price) {

        // :designation est un marqueur, il sera assocssié à la variable $designation dans le bindParam()
        $sql = "INSERT INTO produits(designation, price)
                VALUES (:designation, :price)";

        $this->prepare($sql);
        $this->bindParam(':designation', $designation, \PDO::PARAM_STR);
        $this->bindParam(':price', $price, \PDO::PARAM_STR);
        $this->execute();
    }


    public function delete (int $id) {

        $sql = "DELETE FROM produits 
                WHERE id=:id";
        $this->prepare($sql);
        $this->bindParam(':id', $id, \PDO::PARAM_INT);
        $this->execute();
    }


    public function edit (int $id, string $designation, float $price) {

        $sql = "UPDATE produits 
                SET designation=:designation, price=:price 
                WHERE id=:id";
        $this->prepare($sql);
        $this->bindParam(':id', $id, \PDO::PARAM_INT);
        $this->bindParam(':designation', $designation, \PDO::PARAM_STR);
        $this->bindParam(':price', $price, \PDO::PARAM_STR);
        $this->execute();
    }


    public function getAll() {
        
        $sql = "SELECT id, designation, price
                FROM produits";  
        $this->prepare($sql);
        //pas de marqueurs dont pas besoin de bindParam()
        $this->execute();
        return $this->fetchAll();
    }


    public function getOne (int $id) {
        
        $sql = "SELECT id, designation, price
                FROM produits
                WHERE id=:id";
        $this->prepare($sql);
        $this->bindParam(':id', $id, \PDO::PARAM_INT);
        $this->execute();
        return $this->fetch();
    }
}