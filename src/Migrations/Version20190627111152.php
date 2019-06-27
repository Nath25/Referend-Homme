<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190627111152 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP INDEX IDX_741D53CD6C1197C9 ON place');
        $this->addSql('ALTER TABLE place DROP vote_yes, DROP vote_no, CHANGE project_id_id project_id INT NOT NULL');
        $this->addSql('ALTER TABLE place ADD CONSTRAINT FK_741D53CD166D1F9C FOREIGN KEY (project_id) REFERENCES project (id)');
        $this->addSql('CREATE INDEX IDX_741D53CD166D1F9C ON place (project_id)');
        $this->addSql('DROP INDEX IDX_3BAE0AA76C1197C9 ON event');
        $this->addSql('ALTER TABLE event ADD project_id INT DEFAULT NULL, DROP project_id_id');
        $this->addSql('ALTER TABLE event ADD CONSTRAINT FK_3BAE0AA7166D1F9C FOREIGN KEY (project_id) REFERENCES project (id)');
        $this->addSql('CREATE INDEX IDX_3BAE0AA7166D1F9C ON event (project_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE event DROP FOREIGN KEY FK_3BAE0AA7166D1F9C');
        $this->addSql('DROP INDEX IDX_3BAE0AA7166D1F9C ON event');
        $this->addSql('ALTER TABLE event ADD project_id_id INT NOT NULL, DROP project_id');
        $this->addSql('CREATE INDEX IDX_3BAE0AA76C1197C9 ON event (project_id_id)');
        $this->addSql('ALTER TABLE place DROP FOREIGN KEY FK_741D53CD166D1F9C');
        $this->addSql('DROP INDEX IDX_741D53CD166D1F9C ON place');
        $this->addSql('ALTER TABLE place ADD vote_yes INT DEFAULT NULL, ADD vote_no INT DEFAULT NULL, CHANGE project_id project_id_id INT NOT NULL');
        $this->addSql('CREATE INDEX IDX_741D53CD6C1197C9 ON place (project_id_id)');
    }
}
