<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230428140913 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE excuse (id INT AUTO_INCREMENT NOT NULL, tag_id INT NOT NULL, http_code INT NOT NULL, message VARCHAR(255) NOT NULL, INDEX IDX_623AD9F0BAD26311 (tag_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tag (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE excuse ADD CONSTRAINT FK_623AD9F0BAD26311 FOREIGN KEY (tag_id) REFERENCES tag (id)');
        $this->addSql("INSERT INTO tag(type) VALUES 
        ('Inexcusable'),
        ('Novelty Implementations'),
        ('Edge Cases'),
        ('Fucking'),
        ('Syntax Errors'),
        ('Substance'),
        ('Predictable Problems'),
        ('Somebody Elses Problem'),
        ('Internet crashed');");
        $this->addSql("INSERT INTO excuse (http_code, tag_id, message) VALUES
        (701, '1', 'Meh'),
        (702, '1', 'Emacs'),
        (703, '1', 'Explosion'),
        (704, '1', 'Goto Fail'),
        (705, '1', 'I wrote the code and missed the necessary validation by an oversight (see 795)'),
        (706, '1', 'Delete Your Account'),
        (707, '1', 'Can t quit vi'),
        (710, '2', 'PHP'),
        (711, '2', 'Convenience Store'),
        (712, '2', 'NoSQL'),
        (718, '2', 'I am not a teapot'),
        (719, '2', 'Haskell'),
        (720, '3', 'Unpossible'),
        (721, '3', 'Known Unknowns'),
        (722, '3', 'Unknown Unknowns'),
        (723, '3', 'Tricky'),
        (724, '3', 'This line should be unreachable'),
        (725, '3', 'It works on my machine'),
        (726, '3', 'It s a feature, not a bug'),
        (727, '3', '32 bits is plenty'),
        (728, '3', 'It works in my timezone'),
        (730, '4', 'Fucking npm'),
        (731, '4', 'Fucking Rubygems'),
        (732, '4', 'Fucking Unicöde'),
        (733, '4', 'Fucking Deadlocks'),
        (734, '4', 'Fucking Deferreds'),
        (736, '4', 'Fucking Race Conditions'),
        (735, '4', 'Fucking IE'),
        (737, '4', 'FuckThreadsing'),
        (738, '4', 'Fucking Exactly-once Delivery'),
        (739, '4', 'Fucking Windows'),
        (738, '4', 'Fucking Exactly'),
        (739, '4', 'Fucking McAfee'),
        (750, '5', 'Didn t bother to compile it'),
        (753, '5', 'Syntax Error'),
        (754, '5', 'Too many semi-colons'),
        (755, '5', 'Not enough semi-colons'),
        (756, '5', 'Insufficiently polite'),
        (757, '5', 'Excessively polite'),
        (759, '5', 'Unexpected T_PAAMAYIM_NEKUDOTAYIM'),
        (761, '6', 'Hungover'),
        (762, '6', 'Stoned'),
        (763, '6', 'Under-Caffeinated'),
        (764, '6', 'Over-Caffeinated'),
        (765, '6', 'Railscamp'),
        (766, '6', 'Sober'),
        (767, '6', 'Drunk'),
        (768, '6', 'Accidentally Took Sleeping Pills Instead Of Migraine Pills During Crunch Week'),
        (771, '7', 'Cached for too long'),
        (772, '7', 'Not cached long enough'),
        (773, '7', 'Not cached at all'),
        (774, '7', 'Why did the chicken cross the road?'),
        (775, '7', 'Because the developer was not clear on the specifications'),
        (776, '7', 'Because management said so'),
        (777, '7', 'Because we outsourced that to a company in India'),
        (778, '7', 'Because the third-party API was down'),
        (779, '7', 'Because we forgot to renew the SSL certificate'),
        (780, '8', 'Because our testing environment is not a reflection of production'),
        (781, '8', 'Because of leap year'),
        (782, '8', 'Because of daylight savings time'),
        (783, '8', 'Because of leap second'),
        (784, '8', 'Because of the full moon'),
        (785, '8', 'Because of the new moon'),
        (786, '8', 'Because of the alignment of the planets'),
        (787, '8', 'Because we ran out of disk space'),
        (788, '8', 'Because we hit the rate limit'),
        (789, '8', 'Because we exceeded the quota'),
        (790, '9', 'Because of network congestion'),
        (791, '9', 'Because of a DDoS attack'),
        (792, '9', 'Because we didn t anticipate that'),
        (793, '9', 'Because that s not how it works'),
        (794, '9', 'Because of Murphy s Law'),
        (795, '9', 'Because I m an idiot'),
        (796, '9', 'Because I don t know what I m doing'),
        (797, '9', 'Because I m a genius'),
        (798, '9', 'Because I m a ninja developer'),
        (799, '9', 'Because I m a rockstar developer')");
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE excuse DROP FOREIGN KEY FK_623AD9F0BAD26311');
        $this->addSql('DROP TABLE excuse');
        $this->addSql('DROP TABLE tag');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
