<?php

namespace Akulov\ThreeFormsOfVerbs\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface
{
    /**
     * {@inheritdoc}
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $table = $setup->getConnection()->newTable(
            $setup->getTable('three_forms_of_verbs')
        )->addColumn(
            'id',
            Table::TYPE_INTEGER,
            null,
            ['identity' => true, 'nullable' => false, 'primary' => true],
            'Item ID'
        )->addColumn(
            'translate',
            Table::TYPE_TEXT,
            255,
            ['nullable' => false],
            'Translate'
        )->addColumn(
            'first',
            Table::TYPE_TEXT,
            255,
            ['nullable' => false],
            'First Form'
        )->addColumn(
            'second',
            Table::TYPE_TEXT,
            255,
            ['nullable' => false],
            'Second Form'
        )->addColumn(
            'third',
            Table::TYPE_TEXT,
            255,
            ['nullable' => false],
            'Third Form'
        )->setComment(
            'Three Forms Of Verbs'
        );
        $setup->getConnection()->createTable($table);

        $setup->endSetup();
    }
}
