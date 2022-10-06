<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221006035519 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE offer ADD farmer_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE offer ADD CONSTRAINT FK_29D6873ED532C99C FOREIGN KEY (farmer_id_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_29D6873ED532C99C ON offer (farmer_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE offer DROP FOREIGN KEY FK_29D6873ED532C99C');
        $this->addSql('DROP INDEX IDX_29D6873ED532C99C ON offer');
        $this->addSql('ALTER TABLE offer DROP farmer_id_id');
    }
}
