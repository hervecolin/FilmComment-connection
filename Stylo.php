<?php
class Stylo
{
  private $_couleur;
  private $_numeroSerie;

  function __construct($laCouleur)
  
  {
    $this->_couleur = $laCouleur;
    
	$this->_numeroserie=$unNum;
  }
  public function getCouleur() //affiche la couleur du stylo
{
return $this->_couleur;
}
public function setCouleur($uneCouleur) //indique la couleur du stylo
{
$this->_couleur=$uneCouleur;
}
public function getNumserie() //affiche la couleur du stylo
{
return $this->_numeroSerie;
}





  public function infosStylo()
  {
    return 'Stylo n&deg;'.$this->_numeroSerie.' de couleur '.$this->_couleur.'</br>';
  }
}
?>