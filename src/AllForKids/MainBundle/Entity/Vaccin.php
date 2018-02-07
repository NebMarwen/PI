<?php
/**
 * Created by PhpStorm.
 * User: NeB
 * Date: 2/7/2018
 * Time: 12:21 AM
 */

namespace AllForKids\MainBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="Vaccin")
 */
class Vaccin
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $nom;

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->Age;
    }

    /**
     * @param mixed $Age
     */
    public function setAge($Age)
    {
        $this->Age = $Age;
    }

    /**
     * @return mixed
     */
    public function getMatricule()
    {
        return $this->Matricule;
    }

    /**
     * @param mixed $Matricule
     */
    public function setMatricule($Matricule)
    {
        $this->Matricule = $Matricule;
    }

    /**
     * @ORM\Column(type="integer")
     */
    protected $Age;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $Matricule;


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }




}