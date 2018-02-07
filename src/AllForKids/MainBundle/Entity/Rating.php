<?php
/**
 * Created by PhpStorm.
 * User: NeB
 * Date: 2/7/2018
 * Time: 12:39 AM
 */

namespace AllForKids\MainBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="Vaccin")
 */
class Rating
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

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
    public function getScore()
    {
        return $this->Score;
    }

    /**
     * @param mixed $Score
     */
    public function setScore($Score)
    {
        $this->Score = $Score;
    }

    /**
     * @ORM\Column(type="float")
     */
    protected $Score;

}