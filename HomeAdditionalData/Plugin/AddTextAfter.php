<?php
/**
 * Just an EXAMPLE, done in the same module to show how to customize Magento 2
 * Right approach is to create separate module and define plugin, business logic and configuration there
 */
declare(strict_types=1);

namespace MMatrafailo\HomeAdditionalData\Plugin;

use MMatrafailo\HomeAdditionalData\ViewModel\AdditionalDataViewModel;
use MMatrafailo\HomeAdditionalData\Model\Config;

class AddTextAfter
{
    /**
     * @param Config $config
     */
    public function __construct(private readonly Config $config)
    {
    }

    /**
     * @param AdditionalDataViewModel $subject
     * @param string $result
     * @return string
     */
    public function afterGetText(AdditionalDataViewModel $subject, string $result): string
    {
        if ($this->config->isEnabledTexAfter()) {
            return $result . $this->config->getTextAfter();
        }
        return $result;
    }
}
