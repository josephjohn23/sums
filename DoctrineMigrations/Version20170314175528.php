<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170314175528 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('TRUNCATE TABLE menu_parent');
        $this->addSql('TRUNCATE TABLE menu_child');
        $this->addSql('INSERT INTO `menu_parent` (`name`, `icon`, `route`, `sort_id`) VALUES (\'Home\',\'fa fa-home\', \'cornershort_mlmapp_homepage\' , \'1\')');
        $this->addSql('INSERT INTO `menu_parent` (`name`, `icon`, `route`, `sort_id`) VALUES (\'Register Member\',\'fa fa-user-plus\', \'\', \'2\')');
        $this->addSql('INSERT INTO `menu_parent` (`name`, `icon`, `route`, `sort_id`) VALUES (\'Edit My Account\',\'fa fa-user\', \'cornershort_mlmapp_user_account_page_edit\', \'3\')');

        $this->addSql('INSERT INTO `menu_child` (`menu_parent_id`, `name`, `route`, `access_level`, `sort_id`) VALUES (\'2\',\'Show Members\', \'cornershort_mlmapp_register_member_page_show\', \'100\', \'0\')');
        $this->addSql('INSERT INTO `menu_child` (`menu_parent_id`, `name`, `route`, `access_level`, `sort_id`) VALUES (\'2\',\'Add New Member\', \'cornershort_mlmapp_register_member_page_add\', \'100\', \'1\')');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
