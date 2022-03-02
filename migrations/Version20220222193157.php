<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220222193157 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE client (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE hotel ADD nbr_chambre INT NOT NULL, ADD image VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE reservationhotel ADD hotel_id INT NOT NULL, DROP types_de_chambres, CHANGE nombre_de_personnes client_id INT NOT NULL');
        $this->addSql('ALTER TABLE reservationhotel ADD CONSTRAINT FK_484FE3AA19EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE reservationhotel ADD CONSTRAINT FK_484FE3AA3243BB18 FOREIGN KEY (hotel_id) REFERENCES hotel (id)');
        $this->addSql('CREATE INDEX IDX_484FE3AA19EB6921 ON reservationhotel (client_id)');
        $this->addSql('CREATE INDEX IDX_484FE3AA3243BB18 ON reservationhotel (hotel_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservationhotel DROP FOREIGN KEY FK_484FE3AA19EB6921');
        $this->addSql('DROP TABLE client');
        $this->addSql('ALTER TABLE hotel DROP nbr_chambre, DROP image, CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE localisation localisation VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE email email VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE reservationhotel DROP FOREIGN KEY FK_484FE3AA3243BB18');
        $this->addSql('DROP INDEX IDX_484FE3AA19EB6921 ON reservationhotel');
        $this->addSql('DROP INDEX IDX_484FE3AA3243BB18 ON reservationhotel');
        $this->addSql('ALTER TABLE reservationhotel ADD nombre_de_personnes INT NOT NULL, ADD types_de_chambres VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, DROP client_id, DROP hotel_id');
    }
}
