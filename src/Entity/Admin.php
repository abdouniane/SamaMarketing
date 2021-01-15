<?php

namespace App\Entity;

use App\Repository\AdminRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass=AdminRepository::class)
 * @ORM\Table(name="`admin`")
 * @UniqueEntity("email")
 */
class Admin implements UserInterface
{
/**
 * @ORM\Id
 * @ORM\GeneratedValue
 * @ORM\Column(type="integer") 
 */
private $id;

/**
 * @ORM\Column(type="string", length=35)
 * @Assert\Length(min=3, max=25)
 */
private $nom;

/**
 * @ORM\Column(type="string", length=35)
 * @Assert\Length(min=3, max=25)
 */
private $prenom;

/**
 * @ORM\Column(type="string", length=25)
 * @Assert\Length(min=7, max=15)
 */
private $telephone;

/**
 * @ORM\Column(type="string", length=50)
 * @Assert\Length(min=5, max=35)
 * @Assert\Email()
 */
private $email;

/**
 * @ORM\Column(type="string", length=255)
 * @Assert\Length(min=6)
 */
private $password;

public function getId(): ?int
{
return $this->id;
}

public function getNom(): ?string
{
return $this->nom;
}

public function setNom(string $nom): self
{
$this->nom = $nom;

return $this;
}

public function getPrenom(): ?string
{
return $this->prenom;
}

public function setPrenom(string $prenom): self
{
$this->prenom = $prenom;

return $this;
}

public function getTelephone(): ?string
{
return $this->telephone;
}

public function setTelephone(string $telephone): self
{
$this->telephone = $telephone;

return $this;
}

public function getEmail(): ?string
{
return $this->email;
}

public function setEmail(string $email): self
{
$this->email = $email;

return $this;
}

public function getPassword(): ?string
{
return $this->password;
}

public function setPassword(string $password): self
{
$this->password = $password;

return $this;
}

public function getUsername()
{
return $this->email;
}

public function getCredentials() {

}

public function eraseCredentials() {


}

public function getRoles() {
   return ['ROLE_ADMIN'];
}

public function getSalt() {


}

}
