<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20240606134647 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add service relation to product';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sylius_product ADD service_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE sylius_product ADD CONSTRAINT FK_677B9B74ED5CA9E6 FOREIGN KEY (service_id) REFERENCES acme_sylius_awesome_plugin_service (id)');
        $this->addSql('CREATE INDEX IDX_677B9B74ED5CA9E6 ON sylius_product (service_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sylius_product DROP FOREIGN KEY FK_677B9B74ED5CA9E6');
        $this->addSql('DROP INDEX IDX_677B9B74ED5CA9E6 ON sylius_product');
        $this->addSql('ALTER TABLE sylius_product DROP service_id');
    }
}
