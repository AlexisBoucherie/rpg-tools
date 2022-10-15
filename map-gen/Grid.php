<?php

class Grid
{
    private int $width;
    private int $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @return void
     * make sure that the grid has a valid size
     */
    public function checkValues(): void
    {
        // on s'assure que des valeurs existent pour $width et $height
        if (empty(trim($this->width)) || !isset($this->width)) {
            $this->width = 10;
        }
        if (empty(trim($this->height)) || !isset($this->height)) {
            $this->height = 10;
        }
        // on contrôle que les valeurs ne soient pas négatives
        if ($this->width <= 0) {
            $this->width = 10;
        }
        if ($this->height <= 0) {
            $this->height = 10;
        }
    }

    /**
     * @return void
     * build the grid
     */
    public function buildGrid(): void
    {
        // on génère un tableau d'une taille de $width * $height
        for ($x = 0; $x < $this->width; $x++) {
            echo "<tr>";
            for ($y = 0; $y < $this->height; $y++) {
                echo "<td class=" . $terrainType[$x][$y] . "></td>";
            }
            echo "</tr>";
        }
    }
}

$map = new Grid();
$map->checkValues();
$map->buildGrid();
var_dump($map);