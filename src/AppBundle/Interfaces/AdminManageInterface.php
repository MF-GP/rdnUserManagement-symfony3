<?php

/**
 * All entities which should be managed from Admin interafce must extend this.
 *
 * @author Jayraj Arora <jayraja@mindfiresolutions.com>
 *
 * @category Interface
 */

namespace AppBundle\Interfaces;

interface AdminManageInterface
{

    /**
     * Return if the object is editable
     * @return mixed
     */
    public function isEditable();

    /**
     * Return if the object is deleteable
     * @return mixed
     */
    public function isDeletable();

    /**
     * Return if the object can have detailed view
     * @return mixed
     */
    public function isShowable();
}
