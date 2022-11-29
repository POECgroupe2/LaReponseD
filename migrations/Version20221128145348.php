<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221128145348 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE question_level (question_id INT NOT NULL, level_id INT NOT NULL, INDEX IDX_AA01DD171E27F6BF (question_id), INDEX IDX_AA01DD175FB14BA7 (level_id), PRIMARY KEY(question_id, level_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE question_game (question_id INT NOT NULL, game_id INT NOT NULL, INDEX IDX_7DC5DC631E27F6BF (question_id), INDEX IDX_7DC5DC63E48FD905 (game_id), PRIMARY KEY(question_id, game_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE question_level ADD CONSTRAINT FK_AA01DD171E27F6BF FOREIGN KEY (question_id) REFERENCES question (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE question_level ADD CONSTRAINT FK_AA01DD175FB14BA7 FOREIGN KEY (level_id) REFERENCES level (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE question_game ADD CONSTRAINT FK_7DC5DC631E27F6BF FOREIGN KEY (question_id) REFERENCES question (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE question_game ADD CONSTRAINT FK_7DC5DC63E48FD905 FOREIGN KEY (game_id) REFERENCES game (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE question ADD category_id INT NOT NULL');
        $this->addSql('ALTER TABLE question ADD CONSTRAINT FK_B6F7494E12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('CREATE INDEX IDX_B6F7494E12469DE2 ON question (category_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE question_level DROP FOREIGN KEY FK_AA01DD171E27F6BF');
        $this->addSql('ALTER TABLE question_level DROP FOREIGN KEY FK_AA01DD175FB14BA7');
        $this->addSql('ALTER TABLE question_game DROP FOREIGN KEY FK_7DC5DC631E27F6BF');
        $this->addSql('ALTER TABLE question_game DROP FOREIGN KEY FK_7DC5DC63E48FD905');
        $this->addSql('DROP TABLE question_level');
        $this->addSql('DROP TABLE question_game');
        $this->addSql('ALTER TABLE question DROP FOREIGN KEY FK_B6F7494E12469DE2');
        $this->addSql('DROP INDEX IDX_B6F7494E12469DE2 ON question');
        $this->addSql('ALTER TABLE question DROP category_id');
    }
}
