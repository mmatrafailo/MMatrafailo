<?php
declare(strict_types=1);

namespace MMatrafailo\HomeAdditionalData\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class Config
{
    private const CONFIG_PATH_IS_ENABLED = 'home_additional_data/general/is_enabled';

    private const CONFIG_PATH_TEXT = 'home_additional_data/general/text';

    private const CONFIG_PATH_TEXT_AFTER_ENABLED = 'home_additional_data/general/text_after_enabled';

    private const CONFIG_PATH_TEXT_AFTER = 'home_additional_data/general/text_after';

    /**
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(private readonly ScopeConfigInterface $scopeConfig)
    {
    }

    /**
     * Retrieve enabled flag from config
     *
     * @param int|null $storeId
     * @return bool
     */
    public function isEnabled(?int $storeId = null): bool
    {
        return $this->scopeConfig->isSetFlag(self::CONFIG_PATH_IS_ENABLED, ScopeInterface::SCOPE_STORE, $storeId);
    }

    /**
     * Retrieve text from config
     *
     * @param int|null $storeId
     * @return string
     */
    public function getText(?int $storeId = null): string
    {
        return $this->scopeConfig->getValue(self::CONFIG_PATH_TEXT, ScopeInterface::SCOPE_STORE, $storeId);
    }


    /**
     * Retrieve text after enabled flag from config
     *
     * @param int|null $storeId
     * @return bool
     */
    public function isEnabledTexAfter(?int $storeId = null): bool
    {
        return $this->scopeConfig->isSetFlag(self::CONFIG_PATH_TEXT_AFTER_ENABLED, ScopeInterface::SCOPE_STORE, $storeId);
    }

    /**
     * Retrieve text after from config
     *
     * @param int|null $storeId
     * @return string
     */
    public function getTextAfter(?int $storeId = null): string
    {
        return $this->scopeConfig->getValue(self::CONFIG_PATH_TEXT_AFTER, ScopeInterface::SCOPE_STORE, $storeId);
    }
}
