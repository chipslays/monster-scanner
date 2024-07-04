<?php

namespace App\Controllers;

use Alisa\Context;
use Alisa\Support\Markup;
use Throwable;

class MainController
{
    public function start(Context $context)
    {
        $variant = Markup::variant([
            "{pause:650} {audio:alice-sounds-game-powerup-1}{rand:👀|👋} Давай узнаем, есть ли монстры.\n\n💬 Скажи <<<Найди монстров>>> и я {rand:начну|проверю|начну искать|начну проверку|займусь этим|всё проверю|начну поиски}.",
            "{pause:650} {audio:alice-sounds-game-powerup-1}{rand:👀|👋} Проверим комнату на наличие монстров?\n\n💬 Скажи <<<Найди монстров>>>.",
            "{pause:650} {audio:alice-sounds-game-powerup-1}{rand:👀|👋} Начнём охоту на монстров!\n\n💬 Скажи <<<Найди монстров>>> и я {rand:начну|проверю|начну искать|начну проверку|займусь этим|всё проверю|начну поиски}.",
            "{pause:650} {audio:alice-sounds-game-powerup-1}{rand:👀|👋} Пора проверить комнату!\n\n💬 Скажи <<<Найди монстров>>> и я {rand:начну|проверю|начну искать|начну проверку|займусь этим|всё проверю|начну поиски}.",
            "{pause:650} {audio:alice-sounds-game-powerup-1}{rand:👀|👋} Давай посмотрим, есть ли монстры!\n\n💬 Скажи <<<Найди монстров>>> и я начну.",
            "{pause:650} {audio:alice-sounds-game-powerup-1}{rand:👀|👋} Проверим комнату на монстров?\n\n💬 Скажи <<<Найди монстров>>> и я займусь этим.",
            "{pause:650} {audio:alice-sounds-game-powerup-1}{rand:👀|👋} Монстры, берегитесь!\n\n💬 Скажи <<<Найди монстров>>> и я начну поиск.",
            "{pause:650} {audio:alice-sounds-game-powerup-1}{rand:👀|👋} Давай убедимся, что монстров нет.\n\n💬 Скажи <<<Найди монстров>>> и я проверю.",
            "{pause:650} {audio:alice-sounds-game-powerup-1}{rand:👀|👋} Найдём монстров?\n\n💬 Скажи <<<Найди монстров>>> и я начну.",
            "{pause:650} {audio:alice-sounds-game-powerup-1}{rand:👀|👋} Время проверить комнату!\n\n💬 Скажи <<<Найди монстров>>> и я {rand:начну|проверю|начну искать|начну проверку|займусь этим|всё проверю|начну поиски}.",
            "{pause:650} {audio:alice-sounds-game-powerup-1}{rand:👀|👋} Давай узнаем, есть ли монстры здесь.\n\n💬 Скажи <<<Найди монстров>>> и я начну.",
            "{pause:650} {audio:alice-sounds-game-powerup-1}{rand:👀|👋} Проверим комнату на монстров?\n\n💬 Скажи <<<Найди монстров>>> и я {rand:начну|проверю|начну искать|начну проверку|займусь этим|всё проверю|начну поиски}.",
            "{pause:650} {audio:alice-sounds-game-powerup-1}{rand:👀|👋} Давай убедимся, что монстров нет!\n\n💬 Скажи <<<Найди монстров>>> и я проверю.",
            "{pause:650} {audio:alice-sounds-game-powerup-1}{rand:👀|👋} Монстры, прячьтесь!\n\n💬 Скажи <<<Найди монстров>>> и я начну поиск.",
            "{pause:650} {audio:alice-sounds-game-powerup-1}{rand:👀|👋} Ура, время для проверки монстров!\n\n💬 Скажи <<<Найди монстров>>> и я займусь этим.",
            "{pause:650} {audio:alice-sounds-game-powerup-1}{rand:👀|👋} Давай проверим комнату!\n\n💬 Скажи <<<Найди монстров>>> и я {rand:начну|проверю|начну искать|начну проверку|займусь этим|всё проверю|начну поиски}.",
            "{pause:650} {audio:alice-sounds-game-powerup-1}{rand:👀|👋} Давай убедимся, что монстров нет!\n\n💬 Скажи <<<Найди монстров>>> и я начну.",
            "{pause:650} {audio:alice-sounds-game-powerup-1}{rand:👀|👋} Проверим комнату на монстров!\n\n💬 Скажи <<<Найди монстров>>> и я {rand:начну|проверю|начну искать|начну проверку|займусь этим|всё проверю|начну поиски}.",
            "{pause:650} {audio:alice-sounds-game-powerup-1}{rand:👀|👋} Давай узнаем, есть ли монстры?\n\n💬 Скажи <<<Найди монстров>>> и я {rand:начну|проверю|начну искать|начну проверку|займусь этим|всё проверю|начну поиски}.",
            "{pause:650} {audio:alice-sounds-game-powerup-1}{rand:👀|👋} Пора на поиски монстров!\n\n💬 Скажи <<<Найди монстров>>> и я включу свой волшебный сканер.",
            "{pause:650} {audio:alice-sounds-game-powerup-1}{rand:👀|👋} Хочешь найти монстров? Шепни <<<Найди монстров>>> и мы отправимся на задание.",
            "{pause:650} {audio:alice-sounds-game-powerup-1}{rand:👀|👋} Ба-бах! Я готова искать монстров!\n\n💬 Скажи <<<Найди монстров>>> и поехали!",
            "{pause:650} {audio:alice-sounds-game-powerup-1}{rand:👀|👋} Привет, охотник за приключениями!\n\n💬 Скажи <<<Найди монстров>>> и начнём поиски.",
            "{pause:650} {audio:alice-sounds-game-powerup-1}{rand:👀|👋} Эй-хей! Готовы искать монстров?\n\n💬 Скажи <<<Найди монстров>>> и докажи свою храбрость!",
            "{pause:650} {audio:alice-sounds-game-powerup-1}{rand:👀|👋} Тук-тук! Кто там?\n\n💬 Скажи <<<Найди монстров>>> и мы всех прогоним!",
            "{pause:650} {audio:alice-sounds-game-powerup-1}{rand:👀|👋} Объявляется охота на монстров!\n\n💬 Скажи <<<Найди монстров>>> и начнём приключение.",
            "{pause:650} {audio:alice-sounds-game-powerup-1}{rand:👀|👋} Хочешь прогнать монстров?\n\n💬 Скажи <<<Найди монстров>>> и мы приступим.",
            "{pause:650} {audio:alice-sounds-game-powerup-1}{rand:👀|👋} Давай проверим, есть ли монстры.\n\n💬 Скажи <<<Найди монстров>>> и я {rand:начну|проверю|начну искать|начну проверку|займусь этим|всё проверю|начну поиски}.",
            "{pause:650} {audio:alice-sounds-game-powerup-1}{rand:👀|👋} Пора узнать, есть ли монстры.\n\n💬 Скажи <<<Найди монстров>>> и я {rand:начну|проверю|начну искать|начну проверку|займусь этим|всё проверю|начну поиски}.",
            "{pause:650} {audio:alice-sounds-game-powerup-1}{rand:👀|👋} Проверим твою комнату на монстров.\n\n💬 Скажи <<<Найди монстров>>> и я {rand:начну|проверю|начну искать|начну проверку|займусь этим|всё проверю|начну поиски}.",
            "{pause:650} {audio:alice-sounds-game-powerup-1}{rand:👀|👋} Ну что, проверим комнату?\n\n💬 Скажи <<<Найди монстров>>> и я {rand:начну|проверю|начну искать|начну проверку|займусь этим|всё проверю|начну поиски}.",
            "{pause:650} {audio:alice-sounds-game-powerup-1}{rand:👀|👋} Время для проверки на монстров.\n\n💬 Скажи <<<Найди монстров>>> и я {rand:начну|проверю|начну искать|начну проверку|займусь этим|всё проверю|начну поиски}.",
            "{pause:650} {audio:alice-sounds-game-powerup-1}{rand:👀|👋} Давай выясним, есть ли монстры.\n\n💬 Скажи <<<Найди монстров>>> и я {rand:начну|проверю|начну искать|начну проверку|займусь этим|всё проверю|начну поиски}.",
            "{pause:650} {audio:alice-sounds-game-powerup-1}{rand:👀|👋} Проверим комнату на монстров.\n\n💬 Скажи <<<Найди монстров>>> и я {rand:начну|проверю|начну искать|начну проверку|займусь этим|всё проверю|начну поиски}.",
            "{pause:650} {audio:alice-sounds-game-powerup-1}{rand:👀|👋} Давай убедимся, что монстров нет.\n\n💬 Скажи <<<Найди монстров>>> и я {rand:начну|проверю|начну искать|начну проверку|займусь этим|всё проверю|начну поиски}.",
            "{pause:650} {audio:alice-sounds-game-powerup-1}{rand:👀|👋} Время для охоты на монстров!\n\n💬 Скажи <<<Найди монстров>>> и я {rand:начну|проверю|начну искать|начну проверку|займусь этим|всё проверю|начну поиски}.",
            "{pause:650} {audio:alice-sounds-game-powerup-1}{rand:👀|👋} Давай посмотрим, есть ли монстры.\n\n💬 Скажи <<<Найди монстров>>> и я {rand:начну|проверю|начну искать|начну проверку|займусь этим|всё проверю|начну поиски}.",
        ]);

        $context->reply($variant, buttons: 'main');
    }

    public function help(Context $context)
    {
        $variant = Markup::variant([
            "{rand:🙂|😋} Чтобы найти и прогнать всех монстров, скажи <<<найди монстров>>> 👻 и я {rand:начну|проверю|начну искать|начну проверку|займусь этим|всё проверю|начну поиски}.",
            "{rand:🙂|😋} Подсказываю, скажи <<<найди монстров>>> 👻 и я {rand:начну|проверю|начну искать|начну проверку|займусь этим|всё проверю|начну поиски}.",
            "{rand:🙂|😋} Всё просто, скажи <<<найди монстров>>> 👻 и я {rand:начну|проверю|начну искать|начну проверку|займусь этим|всё проверю|начну поиски}.",
            "{rand:🙂|😋} Легко!\n\nСкажи <<<найди монстров>>> 👻 и я {rand:начну|проверю|начну искать|начну проверку|займусь этим|всё проверю|начну поиски}.",
        ]);

        $context->reply($variant, buttons: 'main');
    }

    public function features(Context $context)
    {
        $variant = Markup::variant([
            "Я умею искать монстров 👻 в твоей комнате, скажи <<<найди монстров>>> и я 👀 {rand:начну|проверю|начну искать|начну проверку|займусь этим|всё проверю|начну поиски}.",
            "Чтобы {rand:найти|искать} 👻 монстров, просто скажи <<<найди монстров>>> и я 👀{rand:начну|проверю|начну искать|начну проверку|займусь этим|всё проверю|начну поиски}.",
            "Я {rand:могу|умею} искать и прогонять 👻 монстров!\n\nСкажи <<<найди монстров>>> и я 👀 {rand:начну|проверю|начну искать|начну проверку|займусь этим|всё проверю|начну поиски}.",
        ]);

        $context->reply($variant, buttons: 'main');
    }

    public function fallback(Context $context)
    {
        $variant = Markup::variant([
            "😝 {rand:А-а-а|Вот блин|Ой блин|Упс|Пук}! Не поняла тебя...\n\nЯ умею только искать монстров. Скажи <<<найди монстров>>> или <<<хватит>>>, чтобы прекратить поиски.",
            "😝 {rand:А-а-а|Вот блин|Ой блин|Упс|Пук}! Не поняла тебя...\n\nЯ умею только искать монстров. Скажи <<<найди монстров>>> или <<<хватит>>>, чтобы прекратить поиски.",
            "😝 {rand:А-а-а|Вот блин|Ой блин|Упс|Пук}! Не поняла тебя...\n\nЯ могу только искать монстров. Скажи <<<найди монстров>>> или <<<хватит>>>, чтобы прекратить поиски.",
            "😝 {rand:Прости|Извини}, не поняла тебя...\n\nЯ только ищу монстров. Скажи <<<найди монстров>>> или <<<хватит>>>, чтобы прекратить поиски.",
        ]);

        $context->reply($variant, buttons: 'main');
    }

    public function thanks(Context $context)
    {
        $variant = Markup::variant([
            'Всегда пожалуйста, я рядом и охраняю тебя!{rand:❤️|😎|🐰|🌸|🐸|🐥|🐣|🌈}',
            'Пожалуйста, я всегда на страже!{rand:❤️|😎|🐰|🌸|🐸|🐥|🐣|🌈}',
            'Не за что, я рядом и защищаю тебя!{rand:❤️|😎|🐰|🌸|🐸|🐥|🐣|🌈}',
            'Не за что, я всегда рядом и слежу за безопасностью!{rand:❤️|😎|🐰|🌸|🐸|🐥|🐣|🌈}',
            'Обращайся, я всегда защищу тебя от любых монстров!{rand:❤️|😎|🐰|🌸|🐸|🐥|🐣|🌈}',
            'Обращайся, я защищу тебя!{rand:❤️|😎|🐰|🌸|🐸|🐥|🐣|🌈}',
            'Пожалуйста, обращайся, я здесь, чтобы охранять тебя!{rand:❤️|😎|🐰|🌸|🐸|🐥|🐣|🌈}',
            'Всегда пожалуйста, я слежу за твоей безопасностью!{rand:❤️|😎|🐰|🌸|🐸|🐥|🐣|🌈}',
            'Не за что, я здесь, чтобы защитить тебя!{rand:❤️|😎|🐰|🌸|🐸|🐥|🐣|🌈}',
            'Не за что, я всегда на страже и готова помочь!{rand:❤️|😎|🐰|🌸|🐸|🐥|🐣|🌈}',
            'Пожалуйста, я всегда рядом, чтобы охранять тебя!{rand:❤️|😎|🐰|🌸|🐸|🐥|🐣|🌈}',
            'Всегда пожалуйста, я твой верный защитник!{rand:❤️|😎|🐰|🌸|🐸|🐥|🐣|🌈}',
            'Обращайся, я всегда рядом и защищаю от монстров!{rand:❤️|😎|🐰|🌸|🐸|🐥|🐣|🌈}',
            'Не за что, я здесь, чтобы заботиться о твоей безопасности!{rand:❤️|😎|🐰|🌸|🐸|🐥|🐣|🌈}',
            'Пожалуйста, я всегда рядом и не пущу монстров!{rand:❤️|😎|🐰|🌸|🐸|🐥|🐣|🌈}',
            'Всегда пожалуйста, я здесь, чтобы защищать тебя!{rand:❤️|😎|🐰|🌸|🐸|🐥|🐣|🌈}',
            'Не за что, я всегда рядом и охраняю твою комнату!{rand:❤️|😎|🐰|🌸|🐸|🐥|🐣|🌈}',
            'Обращайся, я всегда на страже твоего покоя!{rand:❤️|😎|🐰|🌸|🐸|🐥|🐣|🌈}',
            'Пожалуйста, я здесь, чтобы защищать тебя от монстров!{rand:❤️|😎|🐰|🌸|🐸|🐥|🐣|🌈}',
            'Не за что, я всегда рядом и слежу за твоей безопасностью!{rand:❤️|😎|🐰|🌸|🐸|🐥|🐣|🌈}',
        ]);

        $context->finish($variant);
    }

    public function exception(Context $context, Throwable $exception)
    {
        $dir = storage_path('logs/exceptions/' . date('Y-m-d'));

        if (!file_exists($dir)) {
            mkdir($dir, 0776, true);
        }

        $file = $dir . '/exceptions.log';

        file_put_contents($file, '[' . date('d.m.Y H:i:s') . "] \n[context] -> " . $context . "\n[exception] -> " . $exception . "\n\n", FILE_APPEND);
    }
}