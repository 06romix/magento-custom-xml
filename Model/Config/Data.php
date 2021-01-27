<?php
declare(strict_types=1);

namespace Plumrocket\VeryImportantXml\Model\Config;

use Magento\Framework\Config\CacheInterface;
use Magento\Framework\Config\ReaderInterface;
use Magento\Framework\Serialize\SerializerInterface;

/**
 * Optional class can be replaced by VirtualType
 *
 * @since 1.0.0
 */
class Data extends \Magento\Framework\Config\Data
{
    public function __construct(
        ReaderInterface $reader,
        CacheInterface $cache,
        $cacheId,
        SerializerInterface $serializer = null
    ) {
        parent::__construct($reader, $cache, $cacheId, $serializer);
    }
}
