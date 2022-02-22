<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220217090912 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE offre ADD vol_id INT NOT NULL, ADD hotel_id INT NOT NULL, ADD guide_id INT NOT NULL');
        $this->addSql('ALTER TABLE offre ADD CONSTRAINT FK_AF86866F9F2BFB7A FOREIGN KEY (vol_id) REFERENCES vol (id)');
        $this->addSql('ALTER TABLE offre ADD CONSTRAINT FK_AF86866F3243BB18 FOREIGN KEY (hotel_id) REFERENCES hotel (id)');
        $this->addSql('ALTER TABLE offre ADD CONSTRAINT FK_AF86866FD7ED1D4B FOREIGN KEY (guide_id) REFERENCES guide (id)');
        $this->addSql('CREATE INDEX IDX_AF86866F9F2BFB7A ON offre (vol_id)');
        $this->addSql('CREATE INDEX IDX_AF86866F3243BB18 ON offre (hotel_id)');
        $this->addSql('CREATE INDEX IDX_AF86866FD7ED1D4B ON offre (guide_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client CHANGE name name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE guide CHANGE name name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE email email VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE hotel CHANGE name name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE offre DROP FOREIGN KEY FK_AF86866F9F2BFB7A');
        $this->addSql('ALTER TABLE offre DROP FOREIGN KEY FK_AF86866F3243BB18');
        $this->addSql('ALTER TABLE offre DROP FOREIGN KEY FK_AF86866FD7ED1D4B');
        $this->addSql('DROP INDEX IDX_AF86866F9F2BFB7A ON offre');
        $this->addSql('DROP INDEX IDX_AF86866F3243BB18 ON offre');
        $this->addSql('DROP INDEX IDX_AF86866FD7ED1D4B ON offre');
        $this->addSql('ALTER TABLE offre DROP vol_id, DROP hotel_id, DROP guide_id, CHANGE name name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE destination destination VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE image image VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE vol CHANGE name name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
