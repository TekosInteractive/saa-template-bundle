<?php

declare(strict_types=1);

namespace TekosInteractive\SaaTemplateBundle\Tests;

use PHPUnit\Framework\TestCase;
use TekosInteractive\SaaTemplateBundle\DependencyInjection\TekosInteractiveSaaTemplateExtension;
use TekosInteractive\SaaTemplateBundle\TekosInteractiveSaaTemplateBundle;

/**
 * Description: Unit Test for Saa User bundle
 *
 */
class TekosInteractiveSaaTemplateBundleTest extends TestCase
{
    public function testGetContainerExtension(): void
    {
        // Given
        $bundle = new TekosInteractiveSaaTemplateBundle();

        // Then
        $this->assertInstanceOf(
            TekosInteractiveSaaTemplateExtension::class,
            $bundle->getContainerExtension()
        );
    }
}
