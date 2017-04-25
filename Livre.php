<?php
class Livre//Creation de la classe
{
  private $_nbrePages;
  private $_nbreChapitres;
  private $_titreLivre;

  public function __construct($leNbrePages, $leNbreChapitres, $leTitreLivre)//on instancie l'objet avec les parametres requis à définir
  {
    $this->_nbrePages = $leNbrePages;// on indique que la variable nb de page prend la valeur du parametre
    $this->_nbreChapitres = $leNbreChapitres;
    $this->_titreLivre = $leTitreLivre;
  }

  public function infosLivre()
  {
    return 'livre dont le titre est '.$this->_titreLivre.' qui contient '.
    $this->_nbreChapitres.' chapitres et qui a '.$this->_nbrePages.' pages.';
  }
}
?>