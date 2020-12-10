<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\ReviewsStorefrontApi\Api\Data;

/**
 * Autogenerated description for PaginationResponse class
 *
 * phpcs:disable Magento2.PHP.FinalImplementation
 * @SuppressWarnings(PHPMD)
 * @SuppressWarnings(PHPCPD)
 */
final class PaginationResponse implements PaginationResponseInterface
{

    /**
     * @var int
     */
    private $pageSize;

    /**
     * @var int
     */
    private $cursor;
    
    /**
     * @inheritdoc
     *
     * @return int
     */
    public function getPageSize(): int
    {
        return (int) $this->pageSize;
    }
    
    /**
     * @inheritdoc
     *
     * @param int $value
     * @return void
     */
    public function setPageSize(int $value): void
    {
        $this->pageSize = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return int
     */
    public function getCursor(): int
    {
        return (int) $this->cursor;
    }
    
    /**
     * @inheritdoc
     *
     * @param int $value
     * @return void
     */
    public function setCursor(int $value): void
    {
        $this->cursor = $value;
    }
}
