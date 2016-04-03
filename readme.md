# Latte-Parsedown

[Parsedown](https://github.com/erusev/parsedown) parser for Latte.

-----

[![Build Status](https://img.shields.io/travis/minetro/latte-parsedown.svg?branch=flat-square)](https://travis-ci.org/minetro/latte-parsedown)
[![Downloads total](https://img.shields.io/packagist/dt/minetro/latte-parsedown.svg?style=flat-square)](https://packagist.org/packages/minetro/latte-parsedown)
[![Latest stable](https://img.shields.io/packagist/v/minetro/latte-parsedown.svg?style=flat-square)](https://packagist.org/packages/minetro/latte-parsedown)
[![HHVM Status](https://img.shields.io/hhvm/minetro/latte-parsedown.svg?style=flat-square)](http://hhvm.h4cc.de/package/minetro/latte-parsedown)

## Discussion / Help

[![Join the chat at https://gitter.im/Markette/Gopay](https://img.shields.io/gitter/room/minetro/nette.svg?style=flat-square)](https://gitter.im/minetro/nette?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

## Install

```sh
$ composer require minetro/latte-parsedown:~1.0.0
```

## Usage

### Register in config file 

```neon
extensions:
    parsedown: Minetro\Parsedown\DI\ParsedownExtension

parsedown:
    helper: parsedown # Name of the helper in Latte
```
