<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221128152845 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user_game_answer ADD game_id INT NOT NULL');
        $this->addSql('ALTER TABLE user_game_answer ADD CONSTRAINT FK_EF32E78E48FD905 FOREIGN KEY (game_id) REFERENCES game (id)');
        $this->addSql('CREATE INDEX IDX_EF32E78E48FD905 ON user_game_answer (game_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user_game_answer DROP FOREIGN KEY FK_EF32E78E48FD905');
        $this->addSql('DROP INDEX IDX_EF32E78E48FD905 ON user_game_answer');
        $this->addSql('ALTER TABLE user_game_answer DROP game_id');
    }
}
