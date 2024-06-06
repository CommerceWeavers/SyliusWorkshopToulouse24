<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240606091719 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'This migration adds name and cost columns to acme_sylius_awesome_service table';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE acme_sylius_awesome_service ADD name VARCHAR(255) NOT NULL, ADD cost INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE acme_sylius_awesome_service DROP name, DROP cost');
    }
}
