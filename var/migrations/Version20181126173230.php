<?php declare(strict_types=1);

namespace Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181126173230 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $addTimeTable = <<<SQL
CREATE TABLE `time` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(127) NOT NULL,
  `date` date NOT NULL,
  `start` time NOT NULL,
  `end` time NOT NULL,
  `hours` float NOT NULL,
  `account` varchar(55) NOT NULL,
  `task` varchar(55) NOT NULL,
  `notes` text NOT NULL,
  `billable` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_email` (`email`),
  KEY `idx_account` (`account`),
  KEY `idx_task` (`task`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4
SQL;
        $this->addSql($addTimeTable);
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $dropTimeTable = <<<SQL
DROP TABLE `time`
SQL;
        $this->addSql($dropTimeTable);
    }
}
