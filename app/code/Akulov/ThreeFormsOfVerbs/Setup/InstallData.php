<?php

namespace Akulov\ThreeFormsOfVerbs\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    /**
     * {@inheritdoc}
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'возникать',
                'first' => 'arise',
                'second' => 'arose',
                'third' => 'arisen'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'будить, просыпаться',
                'first' => 'awake',
                'second' => 'awoke',
                'third' => 'awoken'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'быть',
                'first' => 'be',
                'second' => 'was were',
                'third' => 'been'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'рождать',
                'first' => 'bear',
                'second' => 'bore',
                'third' => 'borne'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'носить, выносить',
                'first' => 'bear',
                'second' => 'bore',
                'third' => 'borne'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'бить',
                'first' => 'beat',
                'second' => 'beat',
                'third' => 'beaten'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'становиться',
                'first' => 'become',
                'second' => 'became',
                'third' => 'become'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'начинать',
                'first' => 'begin',
                'second' => 'began',
                'third' => 'begun'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'видеть, замечать',
                'first' => 'behold',
                'second' => 'beheld',
                'third' => 'beheld'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'гнуть',
                'first' => 'bend',
                'second' => 'bent',
                'third' => 'bent'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'держать пари',
                'first' => 'bet',
                'second' => 'bet',
                'third' => 'bet'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'связывать',
                'first' => 'bind',
                'second' => 'bound',
                'third' => 'bound'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'кусать',
                'first' => 'bite',
                'second' => 'bit',
                'third' => 'bitten'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'кровоточить',
                'first' => 'bleed',
                'second' => 'bled',
                'third' => 'bled'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'благословлять',
                'first' => 'bless',
                'second' => 'blessed',
                'third' => 'blest'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'дуть',
                'first' => 'blow',
                'second' => 'blew',
                'third' => 'blown'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'ломать',
                'first' => 'break',
                'second' => 'broke',
                'third' => 'broken'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'выращивать',
                'first' => 'breed',
                'second' => 'bred',
                'third' => 'bred'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'приносить',
                'first' => 'bring',
                'second' => 'brought',
                'third' => 'brought'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'распространять',
                'first' => 'broadcast',
                'second' => 'broadcast',
                'third' => 'broadcast'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'строить',
                'first' => 'build',
                'second' => 'built',
                'third' => 'built'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'жечь, гореть',
                'first' => 'burn',
                'second' => 'burnt',
                'third' => 'burnt'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'разразиться, взорваться',
                'first' => 'burst',
                'second' => 'burst',
                'third' => 'burst'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'покупать',
                'first' => 'buy',
                'second' => 'bought',
                'third' => 'bought'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'кидать',
                'first' => 'cast',
                'second' => 'cast',
                'third' => 'cast'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'ловить, хватать',
                'first' => 'catch',
                'second' => 'caught',
                'third' => 'caught'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'выбирать',
                'first' => 'choose',
                'second' => 'chose',
                'third' => 'chosen'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'цепляться',
                'first' => 'cling',
                'second' => 'clung',
                'third' => 'clung'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'приходить',
                'first' => 'come',
                'second' => 'came',
                'third' => 'come'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'стоить',
                'first' => 'cost',
                'second' => 'cost',
                'third' => 'cost'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'ползти',
                'first' => 'creep',
                'second' => 'crept',
                'third' => 'crept'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'резать',
                'first' => 'cut',
                'second' => 'cut',
                'third' => 'cut'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'иметь дело',
                'first' => 'deal',
                'second' => 'dealt',
                'third' => 'dealt'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'копать',
                'first' => 'dig',
                'second' => 'dug',
                'third' => 'dug'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'нырять, погружаться',
                'first' => 'dive',
                'second' => 'dove',
                'third' => 'dived'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'делать',
                'first' => 'do',
                'second' => 'Did',
                'third' => 'Done'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'мочь, уметь',
                'first' => 'сan',
                'second' => 'could',
                'third' => 'been able to'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'рисовать',
                'first' => 'draw',
                'second' => 'drew',
                'third' => 'drawn'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'мечтать',
                'first' => 'dream',
                'second' => 'dreamt',
                'third' => 'dreamt'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'пить',
                'first' => 'drink',
                'second' => 'drank',
                'third' => 'drunk'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'водить',
                'first' => 'drive',
                'second' => 'drove',
                'third' => 'driven'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'обитать',
                'first' => 'dwell',
                'second' => 'dwelt',
                'third' => 'dwelt'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'кушать, есть',
                'first' => 'eat',
                'second' => 'ate',
                'third' => 'eaten'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'падать',
                'first' => 'fall',
                'second' => 'fell',
                'third' => 'fallen'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'кормить',
                'first' => 'feed',
                'second' => 'fed',
                'third' => 'fed'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'чувствовать',
                'first' => 'feel',
                'second' => 'felt',
                'third' => 'felt'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'сражаться',
                'first' => 'fight',
                'second' => 'fought',
                'third' => 'fought'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'находить',
                'first' => 'find',
                'second' => 'found',
                'third' => 'found'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'бежать, спасаться',
                'first' => 'flee',
                'second' => 'fled',
                'third' => 'fled'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'бросать',
                'first' => 'fling',
                'second' => 'flung',
                'third' => 'flung'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'летать',
                'first' => 'fly',
                'second' => 'flew',
                'third' => 'flown'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'запрещать',
                'first' => 'forbid',
                'second' => 'forbade',
                'third' => 'forbidden'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'предсказывать (cast)',
                'first' => 'forecast',
                'second' => 'forecast',
                'third' => 'forecast'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'предвидеть',
                'first' => 'foresee',
                'second' => 'foresaw',
                'third' => 'foreseen'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'предсказывать (tell)',
                'first' => 'foretell',
                'second' => 'foretold',
                'third' => 'foretold'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'забывать',
                'first' => 'forget',
                'second' => 'forgot',
                'third' => 'forgotten'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'прощать',
                'first' => 'forgive',
                'second' => 'forgave',
                'third' => 'forgiven'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'покидать',
                'first' => 'forsake',
                'second' => 'forsook',
                'third' => 'forsaken'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'замерзать',
                'first' => 'freeze',
                'second' => 'froze',
                'third' => 'frozen'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'получать',
                'first' => 'get',
                'second' => 'got',
                'third' => 'got'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'давать',
                'first' => 'give',
                'second' => 'gave',
                'third' => 'given'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'идти',
                'first' => 'go',
                'second' => 'went',
                'third' => 'gone'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'точить, молоть',
                'first' => 'grind',
                'second' => 'ground',
                'third' => 'ground'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'расти',
                'first' => 'grow',
                'second' => 'grew',
                'third' => 'grown'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'вешать',
                'first' => 'hang',
                'second' => 'hung',
                'third' => 'hung'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'иметь',
                'first' => 'have',
                'second' => 'had',
                'third' => 'had'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'слушать',
                'first' => 'hear',
                'second' => 'heard',
                'third' => 'heard'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'прятать',
                'first' => 'hide',
                'second' => 'hid',
                'third' => 'hidden'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'ударять',
                'first' => 'hit',
                'second' => 'hit',
                'third' => 'hit'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'держать',
                'first' => 'hold',
                'second' => 'held',
                'third' => 'held'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'причинять боль',
                'first' => 'hurt',
                'second' => 'hurt',
                'third' => 'hurt'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'хранить, держать',
                'first' => 'keep',
                'second' => 'kept',
                'third' => 'kept'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'становиться на колени',
                'first' => 'kneel',
                'second' => 'knelt',
                'third' => 'knelt'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'вязать',
                'first' => 'knit',
                'second' => 'knit',
                'third' => 'knit'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'знать',
                'first' => 'know',
                'second' => 'knew',
                'third' => 'known'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'класть',
                'first' => 'lay',
                'second' => 'laid',
                'third' => 'laid'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'вести',
                'first' => 'lead',
                'second' => 'led',
                'third' => 'led'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'прыгать',
                'first' => 'leap',
                'second' => 'leapt',
                'third' => 'leapt'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'учить',
                'first' => 'learn',
                'second' => 'learnt',
                'third' => 'learnt'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'оставлять',
                'first' => 'leave',
                'second' => 'left',
                'third' => 'left'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'одалживать',
                'first' => 'lend',
                'second' => 'lent',
                'third' => 'lent'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'позволять',
                'first' => 'let',
                'second' => 'let',
                'third' => 'let'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'лежать',
                'first' => 'lie',
                'second' => 'lay',
                'third' => 'lain'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'освещать',
                'first' => 'light',
                'second' => 'lit',
                'third' => 'lit'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'терять',
                'first' => 'lose',
                'second' => 'lost',
                'third' => 'lost'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'делать, производить',
                'first' => 'make',
                'second' => 'made',
                'third' => 'made'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'подразумевать, значить',
                'first' => 'mean',
                'second' => 'meant',
                'third' => 'meant'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'встречать',
                'first' => 'meet',
                'second' => 'met',
                'third' => 'met'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'ошибаться',
                'first' => 'mistake',
                'second' => 'mistook',
                'third' => 'mistaken'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'платить',
                'first' => 'pay',
                'second' => 'paid',
                'third' => 'paid'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'доказывать',
                'first' => 'prove',
                'second' => 'proved',
                'third' => 'proven'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'класть',
                'first' => 'put',
                'second' => 'put',
                'third' => 'put'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'читать',
                'first' => 'read',
                'second' => 'read',
                'third' => 'read'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'ездить верхом',
                'first' => 'ride',
                'second' => 'rode',
                'third' => 'ridden'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'звонить',
                'first' => 'ring',
                'second' => 'rang',
                'third' => 'rung'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'подниматься',
                'first' => 'rise',
                'second' => 'rose',
                'third' => 'risen'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'бежать',
                'first' => 'run',
                'second' => 'ran',
                'third' => 'run'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'пилить',
                'first' => 'saw',
                'second' => 'sawed',
                'third' => 'sawn'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'говорить',
                'first' => 'say',
                'second' => 'said',
                'third' => 'said'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'видеть',
                'first' => 'see',
                'second' => 'saw',
                'third' => 'seen'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'искать',
                'first' => 'seek',
                'second' => 'sought',
                'third' => 'sought'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'продавать',
                'first' => 'sell',
                'second' => 'sold',
                'third' => 'sold'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'посылать',
                'first' => 'send',
                'second' => 'sent',
                'third' => 'sent'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'устанавливать, помещать',
                'first' => 'set',
                'second' => 'set',
                'third' => 'set'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'шить',
                'first' => 'sew',
                'second' => 'sewed',
                'third' => 'sewn'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'трясти',
                'first' => 'shake',
                'second' => 'shook',
                'third' => 'shaken'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'брить',
                'first' => 'shave',
                'second' => 'shaved',
                'third' => 'shaven'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'проливать',
                'first' => 'shed',
                'second' => 'shed',
                'third' => 'shed'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'светить',
                'first' => 'shine',
                'second' => 'shone',
                'third' => 'shone'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'обувать',
                'first' => 'shoe',
                'second' => 'shod',
                'third' => 'shod'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'стрелять',
                'first' => 'shoot',
                'second' => 'shot',
                'third' => 'shot'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'показывать',
                'first' => 'show',
                'second' => 'showed',
                'third' => 'shown'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'сокращать, сжимать',
                'first' => 'shrink',
                'second' => 'shrank',
                'third' => 'shrunk'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'закрывать',
                'first' => 'shut',
                'second' => 'shut',
                'third' => 'shut'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'петь',
                'first' => 'sing',
                'second' => 'sang',
                'third' => 'sung'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'тонуть, опускаться, погружаться',
                'first' => 'sink',
                'second' => 'sank',
                'third' => 'sunk'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'сидеть',
                'first' => 'sit',
                'second' => 'sat',
                'third' => 'sat'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'спать',
                'first' => 'sleep',
                'second' => 'slept',
                'third' => 'slept'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'скользить',
                'first' => 'slide',
                'second' => 'slid',
                'third' => 'slid'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'пахнуть, нюхать',
                'first' => 'smell',
                'second' => 'smelt',
                'third' => 'smelt'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'сеять',
                'first' => 'sow',
                'second' => 'sowed',
                'third' => 'sown'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'говорить',
                'first' => 'speak',
                'second' => 'spoke',
                'third' => 'spoken'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'ускорять, спешить',
                'first' => 'speed',
                'second' => 'sped',
                'third' => 'sped'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'произносить по буквам',
                'first' => 'spell',
                'second' => 'spelt',
                'third' => 'spelt'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'тратить',
                'first' => 'spend',
                'second' => 'spent',
                'third' => 'spent'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'прясть, вращать',
                'first' => 'spin',
                'second' => 'span',
                'third' => 'spun'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'плевать',
                'first' => 'spit',
                'second' => 'spat',
                'third' => 'spat'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'расщепить, раскалывать',
                'first' => 'split',
                'second' => 'split',
                'third' => 'split'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'портить',
                'first' => 'spoil',
                'second' => 'spoilt',
                'third' => 'spoilt'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'распространяться',
                'first' => 'spread',
                'second' => 'spread',
                'third' => 'spread'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'прыгать',
                'first' => 'spring',
                'second' => 'sprang',
                'third' => 'sprung'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'стоять',
                'first' => 'stand',
                'second' => 'stood',
                'third' => 'stood'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'красть',
                'first' => 'steal',
                'second' => 'stole',
                'third' => 'stolen'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'приклеивать',
                'first' => 'stick',
                'second' => 'stuck',
                'third' => 'stuck'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'жалить',
                'first' => 'sting',
                'second' => 'stung',
                'third' => 'stung'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'ударять, бить',
                'first' => 'strike',
                'second' => 'struck',
                'third' => 'struck'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'клясться',
                'first' => 'swear',
                'second' => 'swore',
                'third' => 'sworn'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'мести',
                'first' => 'sweep',
                'second' => 'swept',
                'third' => 'swept'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'раздуваться',
                'first' => 'swell',
                'second' => 'swelled',
                'third' => 'swollen'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'плавать',
                'first' => 'swim',
                'second' => 'swam',
                'third' => 'swum'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'качать, качаться',
                'first' => 'swing',
                'second' => 'swung',
                'third' => 'swung'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'брать',
                'first' => 'take',
                'second' => 'took',
                'third' => 'taken'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'учить',
                'first' => 'teach',
                'second' => 'taught',
                'third' => 'taught'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'рвать',
                'first' => 'tear',
                'second' => 'tore',
                'third' => 'torn'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'рассказывать',
                'first' => 'tell',
                'second' => 'told',
                'third' => 'told'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'думать',
                'first' => 'think',
                'second' => 'thought',
                'third' => 'thought'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'бросать',
                'first' => 'throw',
                'second' => 'threw',
                'third' => 'thrown'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'проходить, подвергаться',
                'first' => 'undergo',
                'second' => 'underwent',
                'third' => 'undergone'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'понимать',
                'first' => 'understand',
                'second' => 'understood',
                'third' => 'understood'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'опрокинуть',
                'first' => 'upset',
                'second' => 'upset',
                'third' => 'upset'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'просыпать, будить',
                'first' => 'wake',
                'second' => 'woke',
                'third' => 'woken'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'носить',
                'first' => 'wear',
                'second' => 'wore',
                'third' => 'worn'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'сплетать, ткать',
                'first' => 'weave',
                'second' => 'wove',
                'third' => 'woven'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'плакать',
                'first' => 'weep',
                'second' => 'wept',
                'third' => 'wept'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'мочить, поливать,увлажнять',
                'first' => 'wet',
                'second' => 'wet',
                'third' => 'wet'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'выигрывать',
                'first' => 'win',
                'second' => 'won',
                'third' => 'won'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'заводить часы, обвивать',
                'first' => 'wind',
                'second' => 'wound',
                'third' => 'wound'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'забирать, отзывать, отказываться',
                'first' => 'withdraw',
                'second' => 'withdrew',
                'third' => 'withdrawn'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('three_forms_of_verbs'),
            [
                'translate' => 'писать',
                'first' => 'write',
                'second' => 'wrote',
                'third' => 'written'
            ]
        );

        $setup->endSetup();
    }
}
