<?php
/**
 *
 * Copyright © Networldsports, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Networldsports\ListTheme\Plugin\Category;

use Magento\Framework\View\DesignInterface;
use Psr\Log\LoggerInterface;

/**
 * View a category on storefront. Needs to be accessible by POST because of the store switching.
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class View
{

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @var DesignInterface
     */
    private DesignInterface $design;

    /**
     * Constructor
     *
     * @param LoggerInterface $logger
     * @param DesignInterface $design
     * @SuppressWarnings(PHPMD.ExcessiveParameterList)
     */
    public function __construct(
        LoggerInterface $logger,
        DesignInterface $design
    ) {
        $this->logger = $logger;
        $this->design = $design;
    }

    /**
     * Category view action
     *
     * @throws NoSuchEntityException
     */
    public function afterExecute(\Magento\Catalog\Controller\Category\View $subject, $result)
    {
        $this->design->setDesignTheme('Networldsports/categorytheme', 'frontend');
        return $result;
    }
}
