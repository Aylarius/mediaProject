<?php

namespace MediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 */
class Commentaire
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $utilisateur;

    /**
     * @var string
     */
    private $commentaire;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set utilisateur
     *
     * @param string $utilisateur
     * @return Commentaire
     */
    public function setUtilisateur($utilisateur)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return string 
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return Commentaire
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * @var \MediaBundle\Entity\Album
     */
    private $albumid;


    /**
     * Set albumid
     *
     * @param \MediaBundle\Entity\Album $albumid
     * @return Commentaire
     */
    public function setAlbumid(\MediaBundle\Entity\Album $albumid = null)
    {
        $this->albumid = $albumid;

        return $this;
    }

    /**
     * Get albumid
     *
     * @return \MediaBundle\Entity\Album 
     */
    public function getAlbumid()
    {
        return $this->albumid;
    }
}
