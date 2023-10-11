 <?php
class Competence
{
    private $ID;
    private $REFERENCE;
    private $CODE;
    private $NOM;

    public function getID()
    {
        return $this->ID;
    }

    public function setID($ID)
    {
        $this->ID = $ID;
    }

    public function getREFERENCE()
    {
        return $this->REFERENCE;
    }

    public function setREFERENCE($REFERENCE)
    {
        $this->REFERENCE = $REFERENCE;
    }

    public function getCODE()
    {
        return $this->CODE;
    }

    public function setCODE($CODE)
    {
        $this->CODE = $CODE;
    }

    public function getNOM()
    {
        return $this->NOM;
    }

    public function setNOM($NOM)
    {
        $this->NOM = $NOM;
    }
}
?>