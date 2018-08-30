<?php
/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to the commercial license
 * that is bundled with this package in the file LICENSE.txt.
 *
 * @category Extait
 * @package Extait_Cookie
 * @copyright Copyright (c) 2016-2018 Extait, Inc. (http://www.extait.com)
 */

namespace Extait\Cookie\Model;

use Extait\Cookie\Api\Data\CategoryInterface;
use Magento\Framework\Model\AbstractModel;

class Category extends AbstractModel implements CategoryInterface
{
    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(ResourceModel\Category::class);
    }

    /**
     * @inheritDoc
     */
    public function getName()
    {
        return $this->getData(self::NAME);
    }

    /**
     * @inheritDoc
     */
    public function getDescription()
    {
        return $this->getData(self::DESCRIPTION);
    }

    /**
     * @inheritDoc
     */
    public function getIsSystem()
    {
        return (bool)$this->getData(self::IS_SYSTEM);
    }

    /**
     * @inheritDoc
     */
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    /**
     * @inheritDoc
     */
    public function setDescription($description)
    {
        return $this->setData(self::DESCRIPTION, $description);
    }

    /**
     * @inheritDoc
     */
    public function setIsSystem($isSystem)
    {
        return $this->setData(self::IS_SYSTEM, $isSystem);
    }
}
