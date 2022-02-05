<?php

class Teretana
{

    public $teretana_id = 0;
    public $teretana_naziv = '';

    public function getTeretana_id()
    {
        return $this->teretana_id;
    }

    public function getTeretana_naziv()
    {
        return $this->teretana_naziv;
    }

    public function setTeretana_id($teretana_id)
    {
        $this->teretana_id = $teretana_id;
    }

    public function setTeretana_naziv($teretana_naziv)
    {
        $this->teretana_naziv = $teretana_naziv;
    }

    public static function vratiSvePodatkeIzBaze()
    {
        include 'konekcija.php';
        $podaciIzBaze = $mysqli->query('SELECT * FROM teretana');
        $teretaneNiz = array();
        while ($red = $podaciIzBaze->fetch_assoc()) {
            $teretana = new Teretana();
            $teretana->setTeretana_id($red['teretana_id']);
            $teretana->setTeretana_naziv($red['teretana_naziv']);
            array_push($teretaneNiz, $teretana);
        }
        return $teretaneNiz;
    }

    public function save()
    {
        include_once 'konekcija.php';
        $podaciIzBaze = $mysqli->query("INSERT INTO teretana (teretana_naziv)
            VALUES ('$this->teretana_naziv')");
        if ($podaciIzBaze > 0)
            return true;
        else
            return false;
    }


    public static function obrisi($teretana_id)
    {
        include_once 'konekcija.php';
        $podaciIzBaze = $mysqli->query('DELETE FROM teretana WHERE teretana_id=' . $teretana_id);
        if ($podaciIzBaze > 0)
            return true;
        else
            return false;
    }
}
