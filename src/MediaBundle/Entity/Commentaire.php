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
    private $album_id;


    /**
     * Set album_id
     *
     * @param \MediaBundle\Entity\Album $albumId
     * @return Commentaire
     */
    public function setAlbumId(\MediaBundle\Entity\Album $albumId = null)
    {
        $this->album_id = $albumId;

        return $this;
    }

    /**
     * Get album_id
     *
     * @return \MediaBundle\Entity\Album 
     */
    public function getAlbumId()
    {
        return $this->album_id;
    }
}