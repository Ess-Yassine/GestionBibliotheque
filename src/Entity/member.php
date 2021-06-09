<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name = "app_member")
 */
class Member
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
     * @ORM\Column(name = "name", type = "string")
     */
    private $name;

    /**
     * @var string|null
     * 
     * @ORM\Column(name = "code", type = "string")
     */
    private $code;

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
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null
     */
    public function setName(?string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @param string|null
     */
    public function setCode(?string $code)
    {
        $this->code = $code;
    }
}
