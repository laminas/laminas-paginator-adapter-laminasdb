# laminas-paginator-adapter-laminasdb

[![Build Status](https://github.com/laminas/laminas-paginator-adapter-laminasdb/actions/workflows/continuous-integration.yml/badge.svg)](https://github.com/laminas/laminas-paginator-adapter-laminasdb/actions/workflows/continuous-integration.yml)
[![type-coverage](https://shepherd.dev/github/laminas/laminas-paginator-adapter-laminasdb/coverage.svg)](https://shepherd.dev/github/laminas/laminas-paginator-adapter-laminasdb)
[![Psalm level](https://shepherd.dev/github/laminas/laminas-paginator-adapter-laminasdb/level.svg)](https://shepherd.dev/github/laminas/laminas-paginator-adapter-laminasdb)

> ## 🇷🇺 Русским гражданам
>
> Мы, участники Laminas, родились и живем в разных странах. У многих из нас есть друзья, родственники и коллеги как в России, так и в Украине. Некоторые из нас родились в России. Некоторые из нас живут в России. У некоторых бабушки и дедушки сражались с фашистами во Второй мировой войне. Здесь никто не поддерживает фашизм.
>
> У одного из нас есть украинская родственница, которая спаслась из дома вместе с сыном. Поезд задержался из-за бомбежки на дороге впереди. У нас есть друзья, которые прячутся в бомбоубежищах. Мы с тревогой ждем весточки от них после воздушных налетов, которые беспорядочно наносят удары и попадают по больницам, школам, детским садам и домам. Мы не берем это из каких-либо СМИ. Мы наблюдаем это напрямую.
>
> Вы доверяете нам достаточно, чтоб использовать наши программы, и мы просим вас довериться нам вновь. Мы нуждаемся в помощи. Выходите и протестуйте против этой бесполезной войны. Остановите кровопролитие. Скажите "Нет войне!"
>
> ## 🇺🇸 To Citizens of Russia
>
> We at Laminas come from all over the world. Many of us have friends, family and colleagues in both Russia and Ukraine. Some of us were born in Russia. Some of us currently live in Russia. Some have grandparents who fought Nazis in World War II. Nobody here supports fascism.
>
> One team member has a Ukrainian relative who fled her home with her son. The train was delayed due to bombing on the road ahead. We have friends who are hiding in bomb shelters. We anxiously follow up on them after the air raids, which indiscriminately fire at hospitals, schools, kindergartens and houses. We're not taking this from any media. These are our actual experiences.
>
> You trust us enough to use our software. We ask that you trust us to say the truth on this. We need your help. Go out and protest this unnecessary war. Stop the bloodshed. Say "stop the war!"

> [!CAUTION]
> This package is considered feature-complete, and is now in **security-only** maintenance mode, following a [decision by the Technical Steering Committee](https://github.com/laminas/technical-steering-committee/blob/main/meetings/minutes/2022-02-07-TSC-Minutes.md#is-laminas-db-abandoned).
> If you have a security issue, please [follow our security reporting guidelines](https://getlaminas.org/security/).
> If you wish to take on the role of maintainer, please [nominate yourself](https://github.com/laminas/technical-steering-committee/issues/new?assignees=&labels=Nomination&template=Maintainer_Nomination.md&title=%5BNOMINATION%5D%5BMAINTAINER%5D%3A+%7Bname+of+person+being+nominated%7D)

This library provides two adapters for [laminas/laminas-paginator](https://docs.laminas.dev/lmainas-paginator):

- `Laminas\Paginator\Adapter\LaminasDb\DbSelect`
- `Laminas\Paginator\Adapter\LaminasDb\DbTableGateway`

These provide pagination support for [laminas/laminas-db](https://docs.laminas.dev/laminas-db/) SQL select and TableGateway features.

## Installation

Run the following to install this library:

```bash
$ composer require laminas/laminas-paginator-adapter-laminasdb
```

## Documentation

Browse the documentation online at https://docs.laminas.dev/laminas-paginator-adapter-laminasdb/

## Support

- [Issues](https://github.com/laminas/laminas-paginator-adapter-laminasdb/issues/)
- [Forum](https://discourse.laminas.dev/)
