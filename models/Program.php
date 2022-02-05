<?php

class Program
{

    public $program_id;
    public $program_grupa;
    public $program_opis;
    public $program_cena;
    public $teretana_id;

    public function getProgram_id()
    {
        return $this->program_id;
    }

    public function getProgram_grupa()
    {
        return $this->program_grupa;
    }

    public function getProgram_opis()
    {
        return $this->program_opis;
    }

    public function getProgram_cena()
    {
        return $this->program_cena;
    }

    public function getTeretana_id()
    {
        return $this->teretana_id;
    }

    public function setProgram_id($program_id)
    {
        $this->program_id = $program_id;
    }

    public function setProgram_grupa($program_grupa)
    {
        $this->program_grupa = $program_grupa;
    }

    public function setProgram_opis($program_opis)
    {
        $this->program_opis = $program_opis;
    }

    public function setProgram_cena($program_cena)
    {
        $this->program_cena = $program_cena;
    }

    public function setTeretana_id($teretana_id)
    {
        $this->teretana_id = $teretana_id;
    }

    public static function vratiSvePodatkeIzBaze()
    {
        include_once 'konekcija.php';
        $podaciIzBaze = $mysqli->query('SELECT program_id, program_grupa, program_opis, program_cena, teretana_naziv 
                                        FROM teretana, program 
                                        WHERE teretana.teretana_id=program.teretana_id');
        $programNiz = array();
        while ($red = $podaciIzBaze->fetch_assoc()) {
            $program = new Program();
            $program->setProgram_id($red['program_id']);
            $program->setProgram_grupa($red['program_grupa']);
            $program->setProgram_opis($red['program_opis']);
            $program->setProgram_cena($red['program_cena']);
            $program->setTeretana_id($red['teretana_naziv']);
            array_push($programNiz, $program);
        }
        return $programNiz;
    }

    public static function sortAsc()
    {
        include_once 'konekcija.php';
        $podaciIzBaze = $mysqli->query("SELECT program_id, program_grupa, program_opis, program_cena, teretana_naziv 
                                        FROM teretana, program 
                                        WHERE teretana.teretana_id=program.teretana_id
                                        ORDER BY program_id ASC");
        $programNiz = array();
        while ($red = $podaciIzBaze->fetch_assoc()) {
            $program = new Program();
            $program->setProgram_id($red['program_id']);
            $program->setProgram_grupa($red['program_grupa']);
            $program->setProgram_opis($red['program_opis']);
            $program->setProgram_cena($red['program_cena']);
            $program->setTeretana_id($red['teretana_naziv']);

            array_push($programNiz, $program);
        }
        return $programNiz;
    }

    public static function sortDesc()
    {
        include_once 'konekcija.php';
        $podaciIzBaze = $mysqli->query("SELECT program_id, program_grupa, program_opis, program_cena, teretana_naziv 
                                        FROM teretana, program 
                                        WHERE teretana.teretana_id=program.teretana_id
                                        ORDER BY program_id DESC");
        $programNiz = array();
        while ($red = $podaciIzBaze->fetch_assoc()) {
            $program = new Program();
            $program->setProgram_id($red['program_id']);
            $program->setProgram_grupa($red['program_grupa']);
            $program->setProgram_opis($red['program_opis']);
            $program->setProgram_cena($red['program_cena']);
            $program->setTeretana_id($red['teretana_naziv']);

            array_push($programNiz, $program);
        }
        return $programNiz;
    }

    public static function vratiPoNazivu($pretraga)
    {
        include_once 'konekcija.php';
        $podaciIzBaze = $mysqli->query("SELECT program_id, program_grupa, program_opis, program_cena, teretana_naziv 
                                        FROM teretana, program 
                                        WHERE teretana.teretana_id=program.teretana_id and program_grupa LIKE '%$pretraga%'");
        $programNiz = array();
        while ($red = $podaciIzBaze->fetch_assoc()) {
            $program = new Program();
            $program->setProgram_id($red['program_id']);
            $program->setProgram_grupa($red['program_grupa']);
            $program->setProgram_opis($red['program_opis']);
            $program->setProgram_cena($red['program_cena']);
            $program->setTeretana_id($red['teretana_naziv']);

            array_push($programNiz, $program);
        }
        return $programNiz;
    }



    public function save()
    {
        include_once 'konekcija.php';
        $podaciIzBaze = $mysqli->query("INSERT INTO program (program_grupa, program_opis, program_cena, teretana_id)
            VALUES ('$this->program_grupa', '$this->program_opis', '$this->program_cena', '$this->teretana_id')");
        if ($podaciIzBaze > 0)
            return true;
        else
            return false;
    }

    public static function obrisi($program_id)
    {
        include_once 'konekcija.php';
        $podaciIzBaze = $mysqli->query('DELETE FROM program WHERE program_id=' . $program_id);
        if ($podaciIzBaze > 0)
            return true;
        else
            return false;
    }
}
