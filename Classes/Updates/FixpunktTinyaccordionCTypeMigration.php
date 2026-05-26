<?php

declare(strict_types=1);

namespace Quizpalme\Tinyaccordion\Updates;

use TYPO3\CMS\Install\Attribute\UpgradeWizard;
use TYPO3\CMS\Install\Updates\AbstractListTypeToCTypeUpdate;

#[UpgradeWizard('fixpunktTinyaccordionCTypeMigration')]
final class FixpunktTinyaccordionCTypeMigration extends AbstractListTypeToCTypeUpdate
{
    public function getTitle(): string
    {
        return 'Migrate "Fixpunkt Tinyaccordion" plugins to content elements.';
    }

    public function getDescription(): string
    {
        return 'The "Fixpunkt Tinyaccordion" plugins are now registered as content element. Update migrates existing records and backend user permissions.';
    }

    /**
     * This must return an array containing the "list_type" to "CType" mapping
     *
     * @return array<string, string>
     */
    protected function getListTypeToCTypeMapping(): array
    {
        return [
            'tinyaccordion_content' => 'tinyaccordion_content',
            'tinyaccordion_contentui' => 'tinyaccordion_contentui',
            'tinyaccordion_news' => 'tinyaccordion_news',
            'tinyaccordion_newsui' => 'tinyaccordion_newsui',
            'tinyaccordion_page' => 'tinyaccordion_page',
            'tinyaccordion_pageui' => 'tinyaccordion_pageui'
        ];
    }
}
