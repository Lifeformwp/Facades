<?php
declare(strict_types=1);

namespace CosmonovaRnD\Facades\Buildings\DTO;

/**
 * Class Buildings
 *
 * @author Serhii Kondratiuk <serhii.kondratiuk@cosmonova.net>
 * @package CosmonovaRnD\Facades\Buildings
 * @since   1.3.0
 * Cosmonova | Research & Development
 */
abstract class Building
{
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $name;
    /**
     * @var int|null
     */
    public $type;
    /**
     * @var null|string
     */
    public $googlePlaceId;
    /**
     * @var array|null
     */
    public $photos;
    /**
     * @var Housing|null
     */
    public $housing;
    /**
     * @var array|null
     */
    public $agreements;
    /**
     * @var array|null
     */
    public $competitors;
    /**
     * @var string
     */
    public $createdBy;
    /**
     * @var string
     */
    public $editedBy;
    /**
     * @var \DateTimeImmutable
     */
    public $createdAt;
    /**
     * @var \DateTimeImmutable
     */
    public $updatedAt;
    /**
     * @var null|string
     */
    public $objectType;
}