<?php
declare(strict_types=1);

namespace MMatrafailo\HomeAdditionalData\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use MMatrafailo\HomeAdditionalData\Model\Config;

class AdditionalDataViewModel implements ArgumentInterface
{
    /**
     * @param Config $config
     */
    public function __construct(private readonly Config $config)
    {
    }

    /**
     * Retrieve text from config
     *
     * @return string
     */
    public function getText(): string
    {
        return $this->config->getText();
    }
}
