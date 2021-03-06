<?php

namespace AppBundle\Entity;

use AppBundle\Interfaces\AdminManageInterface;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Entity
 * @ORM\EntityListeners({})
 * @ORM\AttributeOverrides(
 * {
 *     @ORM\AttributeOverride(name="username", column=@ORM\Column(length=16, name="initiator", nullable=false)),
 *     @ORM\AttributeOverride(name="password", column=@ORM\Column(name="pin", nullable=false))
 * }
 * )
 */
class User extends BaseUser implements AdminManageInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $last_activity_date;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $last_updated_date;
    
    /**
     * Set lastActivityDate
     *
     * @param \DateTime $lastActivityDate
     *
     * @return User
     */
    public function setLastActivityDate($lastActivityDate)
    {
        $this->last_activity_date = $lastActivityDate;

        return $this;
    }

    /**
     * Get lastActivityDate
     *
     * @return \DateTime
     */
    public function getLastActivityDate()
    {
        return $this->last_activity_date;
    }

    /**
     * Set lastUpdatedDate
     *
     * @param \DateTime $lastUpdatedDate
     *
     * @return User
     */
    public function setLastUpdatedDate($lastUpdatedDate)
    {
        $this->last_updated_date = $lastUpdatedDate;

        return $this;
    }

    /**
     * Get lastUpdatedDate
     *
     * @return \DateTime
     */
    public function getLastUpdatedDate()
    {
        return $this->last_updated_date;
    }

    /**
     * @inheritdoc
     */
    public function isDeletable()
    {
        return false;
    }

    /**
     * @inheritdoc
     */
    public function isEditable()
    {
        return true;
    }

    /**
     * @inheritdoc
     */
    public function isShowable()
    {
        return false;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

