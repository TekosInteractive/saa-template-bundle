<?php

declare(strict_types=1);

namespace TekosInteractive\SaaTemplateBundle;

use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;
use TekosInteractive\SaaTemplateBundle\DependencyInjection\TekosInteractiveSaaTemplateExtension;

class TekosInteractiveSaaTemplateBundle extends AbstractBundle
{
    public function getContainerExtension(): ?ExtensionInterface
    {
        if (null === $this->extension) {
            $this->extension = new TekosInteractiveSaaTemplateExtension();
        }

        return $this->extension ?: null;
    }
}
