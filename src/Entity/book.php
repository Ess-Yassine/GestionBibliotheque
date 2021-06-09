<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name = "app_book")
 */
class Book
{
    /**
     * @var int|null
     * 
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name = "id", type = "integer")
     * 
     */
    private $id;

    /**
     * @var string|null
     * 
     * @ORM\Column(name = "title", type = "string")
     */
    private $title;

    /**
     * @var string|null
     * 
     * @ORM\Column(name = "author", type = "string")
     */
    private $author;

    /**
     * @var int|null
     * 
     * @ORM\Column(name = "nbr_examplaires", type = "")
     */
    private $nbExamples;

    /**
     * @var
     * 
     * @ORM\Column(name = "EAN13", type = "")
     */
    private $ean13;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null
     */
    public function setId(?int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null
     */
    public function setTitle(?string $title)
    {
        $this->title = $title;
    }

    /**
     * @return string|null
     */
    public function getAuthor(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null
     */
    public function setAuthor(?string $author)
    {
        $this->author = $author;
    }

    /**
     * @return int|null
     */
    public function getNbExamples(): ?int
    {
        return $this->nbExamples;
    }

    /**
     * @param int|null
     */
    public function setNbExamples(?int $nbExamples)
    {
        $this->nbExamples = $nbExamples;
    }
}
