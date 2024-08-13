<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]

class User {
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy:"AUTO")]
    #[ORM\Column(type:"integer")]
    private int $id;

    #[ORM\Column(type:"string")]
    private string $username;

    #[ORM\Column(type:"string")]
    private string $email;

    #[ORM\Column(type:"string")]
    private string $password;
}
