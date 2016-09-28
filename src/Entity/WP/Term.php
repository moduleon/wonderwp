<?php

namespace WonderWp\Entity\WP;

use Doctrine\ORM\Mapping as ORM;
use Kayue\WordpressBundle\Annotation as Wordpress;
use Symfony\Component\Validator\Constraints as Constraints;

/**
 * @Table(name="terms")
 * @Entity
 * @Entity(repositoryClass="Kayue\WordpressBundle\Repository\TermRepository")
 * @Wordpress\WordpressTable
 */
class Term
{
    /**
     * {@inheritdoc}
     *
     * @Column(name="term_id", type="bigint", length=20)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * {@inheritdoc}
     *
     * @Column(name="name", type="string", length=200)
     * @Constraints\NotBlank()
     */
    protected $name;

    /**
     * {@inheritdoc}
     *
     * @Column(name="slug", type="string", length=200)
     */
    protected $slug;

    /**
     * {@inheritdoc}
     *
     * @Column(name="term_group", type="bigint", length=10)
     */
    protected $group = 0;

    /**
     * {@inheritdoc}
     *
     * @OneToOne(targetEntity="Taxonomy", mappedBy="term")
     */
    protected $taxonomy;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set slug
     *
     * @param string $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set group
     *
     * @param int $group
     */
    public function setGroup($group)
    {
        $this->group = $group;
    }

    /**
     * Get group
     *
     * @return int
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Set taxonomy
     *
     * @param Taxonomy $taxonomy
     */
    public function setTaxonomy(Taxonomy $taxonomy)
    {
        $this->taxonomy = $taxonomy;
    }

    /**
     * Get taxonomy
     *
     * @return Taxonomy
     */
    public function getTaxonomy()
    {
        return $this->taxonomy;
    }
}
