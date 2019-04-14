<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;

class ProduitController extends Controller
{
    public function find($name)
    {
    	$Prod=Produit::find($name);
    	if ($Prod=!null )
         if $Prod->dispo=true
           afficher $Prod->lieu;

    }
}