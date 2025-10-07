<?php
require_once 'Mamifero.php';

class Cachorro1 extends Mamifero
{

    public function enterrarOsso()
    {
        echo "<p>Enterrou um osso.</p>";
    }

    public function abanarRabo()
    {
        echo "<p>Abanando rabo...</p>";
    }
}
