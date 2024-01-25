<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240124103020 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE order_details ADD taux_promo DOUBLE PRECISION DEFAULT NULL, ADD totalreduction DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE promo CHANGE code code VARCHAR(255) NOT NULL, CHANGE taux taux DOUBLE PRECISION NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE promo CHANGE code code VARCHAR(180) NOT NULL, CHANGE taux taux NUMERIC(10, 0) NOT NULL');
        $this->addSql('ALTER TABLE order_details DROP taux_promo, DROP totalreduction');
    }
}
