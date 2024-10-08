<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]

class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy:"AUTO")]
    #[ORM\Column(type:"integer")]
    private int $id;

    #[ORM\Column(type:"string")]
    private string $name;

    #[ORM\Column(type:"integer")]
    private int $price;

    #[ORM\Column(type:"text")]
    private string $description;

    #[ORM\Column(type:"string")]
    private ?string $shortDescription;
}
