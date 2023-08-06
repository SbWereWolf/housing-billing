<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Address
 *
 * @ORM\Table(name="address", uniqueConstraints={@ORM\UniqueConstraint(name="address_code_ux", columns={"code"})})
 * @ORM\Entity
 */
class Address
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="address_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title", type="text", nullable=true)
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code", type="text", nullable=true)
     */
    private $code;

    /**
     * @var string|null
     *
     * @ORM\Column(name="remark", type="text", nullable=true)
     */
    private $remark;

    /**
     * @var int
     *
     * @ORM\Column(name="region", type="integer", nullable=false)
     */
    private $region;

    /**
     * @var string|null
     *
     * @ORM\Column(name="steads_objectguid", type="guid", nullable=true)
     */
    private $steadsObjectguid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="carplaces_objectguid", type="guid", nullable=true)
     */
    private $carplacesObjectguid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="houses_objectguid", type="guid", nullable=true)
     */
    private $housesObjectguid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="apartments_objectguid", type="guid", nullable=true)
     */
    private $apartmentsObjectguid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rooms_objectguid", type="guid", nullable=true)
     */
    private $roomsObjectguid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_1_object_id", type="bigint", nullable=true)
     */
    private $level1ObjectId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_2_object_id", type="bigint", nullable=true)
     */
    private $level2ObjectId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_3_object_id", type="bigint", nullable=true)
     */
    private $level3ObjectId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_4_object_id", type="bigint", nullable=true)
     */
    private $level4ObjectId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_5_object_id", type="bigint", nullable=true)
     */
    private $level5ObjectId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_6_object_id", type="bigint", nullable=true)
     */
    private $level6ObjectId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_7_object_id", type="bigint", nullable=true)
     */
    private $level7ObjectId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_8_object_id", type="bigint", nullable=true)
     */
    private $level8ObjectId;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): static
    {
        $this->code = $code;

        return $this;
    }

    public function getRemark(): ?string
    {
        return $this->remark;
    }

    public function setRemark(?string $remark): static
    {
        $this->remark = $remark;

        return $this;
    }

    public function getRegion(): ?int
    {
        return $this->region;
    }

    public function setRegion(int $region): static
    {
        $this->region = $region;

        return $this;
    }

    public function getSteadsObjectguid(): ?string
    {
        return $this->steadsObjectguid;
    }

    public function setSteadsObjectguid(?string $steadsObjectguid): static
    {
        $this->steadsObjectguid = $steadsObjectguid;

        return $this;
    }

    public function getCarplacesObjectguid(): ?string
    {
        return $this->carplacesObjectguid;
    }

    public function setCarplacesObjectguid(?string $carplacesObjectguid): static
    {
        $this->carplacesObjectguid = $carplacesObjectguid;

        return $this;
    }

    public function getHousesObjectguid(): ?string
    {
        return $this->housesObjectguid;
    }

    public function setHousesObjectguid(?string $housesObjectguid): static
    {
        $this->housesObjectguid = $housesObjectguid;

        return $this;
    }

    public function getApartmentsObjectguid(): ?string
    {
        return $this->apartmentsObjectguid;
    }

    public function setApartmentsObjectguid(?string $apartmentsObjectguid): static
    {
        $this->apartmentsObjectguid = $apartmentsObjectguid;

        return $this;
    }

    public function getRoomsObjectguid(): ?string
    {
        return $this->roomsObjectguid;
    }

    public function setRoomsObjectguid(?string $roomsObjectguid): static
    {
        $this->roomsObjectguid = $roomsObjectguid;

        return $this;
    }

    public function getLevel1ObjectId(): ?string
    {
        return $this->level1ObjectId;
    }

    public function setLevel1ObjectId(?string $level1ObjectId): static
    {
        $this->level1ObjectId = $level1ObjectId;

        return $this;
    }

    public function getLevel2ObjectId(): ?string
    {
        return $this->level2ObjectId;
    }

    public function setLevel2ObjectId(?string $level2ObjectId): static
    {
        $this->level2ObjectId = $level2ObjectId;

        return $this;
    }

    public function getLevel3ObjectId(): ?string
    {
        return $this->level3ObjectId;
    }

    public function setLevel3ObjectId(?string $level3ObjectId): static
    {
        $this->level3ObjectId = $level3ObjectId;

        return $this;
    }

    public function getLevel4ObjectId(): ?string
    {
        return $this->level4ObjectId;
    }

    public function setLevel4ObjectId(?string $level4ObjectId): static
    {
        $this->level4ObjectId = $level4ObjectId;

        return $this;
    }

    public function getLevel5ObjectId(): ?string
    {
        return $this->level5ObjectId;
    }

    public function setLevel5ObjectId(?string $level5ObjectId): static
    {
        $this->level5ObjectId = $level5ObjectId;

        return $this;
    }

    public function getLevel6ObjectId(): ?string
    {
        return $this->level6ObjectId;
    }

    public function setLevel6ObjectId(?string $level6ObjectId): static
    {
        $this->level6ObjectId = $level6ObjectId;

        return $this;
    }

    public function getLevel7ObjectId(): ?string
    {
        return $this->level7ObjectId;
    }

    public function setLevel7ObjectId(?string $level7ObjectId): static
    {
        $this->level7ObjectId = $level7ObjectId;

        return $this;
    }

    public function getLevel8ObjectId(): ?string
    {
        return $this->level8ObjectId;
    }

    public function setLevel8ObjectId(?string $level8ObjectId): static
    {
        $this->level8ObjectId = $level8ObjectId;

        return $this;
    }


}
