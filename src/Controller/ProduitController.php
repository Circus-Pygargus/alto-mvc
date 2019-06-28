<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Application\Controller;


class ProduitController extends Controller {

    // la fonction __construct est directement héritée de la classe mère

    public function default () {
        $objProduit = new Produit();
        $produits = $objProduit->getAll();
        return $this->twig->render(
            'produits/default.html.twig',
            [
                'produits' => $produits
            ]
        );
    }


    public function delete ( $params = [] ) {
        $id = $params['idProduit'];
        $produit  = new Produit();
        $produit->delete($id);
        header('Location: /produits');
    }

}