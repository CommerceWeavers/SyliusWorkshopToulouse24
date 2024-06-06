<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20240606130646 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Adding name and cost columns to acme_sylius_awesome_plugin_service table';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE acme_sylius_awesome_plugin_service ADD name VARCHAR(255) DEFAULT NULL, ADD cost INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE acme_sylius_awesome_plugin_service DROP name, DROP cost');
    }
}
