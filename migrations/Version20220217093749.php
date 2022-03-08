<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220217093749 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE resoffre ADD client_id INT NOT NULL, ADD offre_id INT NOT NULL, DROP id_offre, DROP id_client');
        $this->addSql('ALTER TABLE resoffre ADD CONSTRAINT FK_B6CB24DB19EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE resoffre ADD CONSTRAINT FK_B6CB24DB4CC8505A FOREIGN KEY (offre_id) REFERENCES offre (id)');
        $this->addSql('CREATE INDEX IDX_B6CB24DB19EB6921 ON resoffre (client_id)');
        $this->addSql('CREATE INDEX IDX_B6CB24DB4CC8505A ON resoffre (offre_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client CHANGE name name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE guide CHANGE name name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE email email VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE hotel CHANGE name name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE offre CHANGE name name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE destination destination VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE image image VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE resoffre DROP FOREIGN KEY FK_B6CB24DB19EB6921');
        $this->addSql('ALTER TABLE resoffre DROP FOREIGN KEY FK_B6CB24DB4CC8505A');
        $this->addSql('DROP INDEX IDX_B6CB24DB19EB6921 ON resoffre');
        $this->addSql('DROP INDEX IDX_B6CB24DB4CC8505A ON resoffre');
        $this->addSql('ALTER TABLE resoffre ADD id_offre INT NOT NULL, ADD id_client INT NOT NULL, DROP client_id, DROP offre_id');
        $this->addSql('ALTER TABLE vol CHANGE name name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
