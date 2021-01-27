<?php
declare(strict_types=1);

namespace Plumrocket\VeryImportantXml\Model\Config;

use Magento\Framework\Config\ConverterInterface;

class Converter implements ConverterInterface
{
    /**
     * Convert config
     *
     * @param \DOMDocument $source
     * @return array
     */
    public function convert($source)
    {
        $output = [];
        $books = $source->getElementsByTagName('book');
        /** @var \DOMNode $theme */
        foreach ($books as $theme) {
            $bookInfo = [];
            foreach ($theme->attributes as $attribute) {
                $bookInfo[$attribute->nodeName] = $attribute->nodeValue;
            }

            $output[$theme->attributes->getNamedItem('isbn')->nodeValue] = $bookInfo;
        }

        return $output;
    }
}
