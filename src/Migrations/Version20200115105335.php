<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200115105335 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE products (id INT AUTO_INCREMENT NOT NULL, groupe VARCHAR(255) NOT NULL, sgroupe VARCHAR(255) NOT NULL, ssgroupe VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, energie VARCHAR(255) NOT NULL, eau VARCHAR(255) NOT NULL, proteines VARCHAR(255) NOT NULL, glucides VARCHAR(255) NOT NULL, lipides VARCHAR(255) NOT NULL, sucres VARCHAR(255) NOT NULL, amidon VARCHAR(255) NOT NULL, fibres VARCHAR(255) NOT NULL, polyols VARCHAR(255) NOT NULL, cendres VARCHAR(255) NOT NULL, alcool VARCHAR(255) NOT NULL, acides_organiques VARCHAR(255) NOT NULL, agsatures VARCHAR(255) NOT NULL, agmonoinsatures VARCHAR(255) NOT NULL, agpolyinsatures VARCHAR(255) NOT NULL, agbutyrique VARCHAR(255) NOT NULL, agcaproique VARCHAR(255) NOT NULL, agcaprylique VARCHAR(255) NOT NULL, agcaprique VARCHAR(255) NOT NULL, aglaurique VARCHAR(255) NOT NULL, agmyristique VARCHAR(255) NOT NULL, agpalmitique VARCHAR(255) NOT NULL, agstÃearique VARCHAR(255) NOT NULL, agoleique VARCHAR(255) NOT NULL, aglinoleique VARCHAR(255) NOT NULL, agalphalinolenique VARCHAR(255) NOT NULL, agarachidonique VARCHAR(255) NOT NULL, agepa VARCHAR(255) NOT NULL, agdha VARCHAR(255) NOT NULL, cholesterol VARCHAR(255) NOT NULL, sel VARCHAR(255) NOT NULL, calcium VARCHAR(255) NOT NULL, chlorure VARCHAR(255) NOT NULL, cuivre VARCHAR(255) NOT NULL, fer VARCHAR(255) NOT NULL, iode VARCHAR(255) NOT NULL, magnesium VARCHAR(255) NOT NULL, manganese VARCHAR(255) NOT NULL, phosphore VARCHAR(255) NOT NULL, potassium VARCHAR(255) NOT NULL, selenium VARCHAR(255) NOT NULL, sodium VARCHAR(255) NOT NULL, zinc VARCHAR(255) NOT NULL, retinol VARCHAR(255) NOT NULL, betacarotene VARCHAR(255) NOT NULL, vitamine_d VARCHAR(255) NOT NULL, vitamine_e VARCHAR(255) NOT NULL, vitamine_k1 VARCHAR(255) NOT NULL, vitamine_k2 VARCHAR(255) NOT NULL, vitamine_c VARCHAR(255) NOT NULL, vitamine_b1 VARCHAR(255) NOT NULL, vitamine_b2 VARCHAR(255) NOT NULL, vitamine_b3 VARCHAR(255) NOT NULL, vitamine_b5 VARCHAR(255) NOT NULL, vitamine_b6 VARCHAR(255) NOT NULL, vitamine_b9 VARCHAR(255) NOT NULL, vitamine_b12 VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE products');
    }
}
