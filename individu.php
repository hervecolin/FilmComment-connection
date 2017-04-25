<?php
class Individu
{
  private $_nom;
  private $_prenom;

  public function __construct($unNom, $unPrenom)
  {
    $this->_nom = $unNom;
    $this->_prenom = $unPrenom;
  }
  public function getNom() //accesseur getter !
{
return $this->_nom;
}
public function setNom($_nom) // setter accesseur en ecriture !indique la couleur du stylo
 {
$this->_nom=$unNom;


  public function infosIndividu()
  {
    return 'Bonjour '.$this->_nom.' '.$this->_prenom;
  }
}
?>