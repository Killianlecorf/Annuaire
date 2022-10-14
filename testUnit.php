<?php

class testUnit  
{

    private $numero;

    public function NumVerif()
    {   
        $this->numero = $_POST['user_number'];

        if ($this->numero == 0 ) {
            echo 'le numero nest pas bon';
        }
    }
}
