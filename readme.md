# Latte-Parsedown

[![Build Status](https://travis-ci.org/minetro/latte-parsedown.svg?branch=master)](https://travis-ci.org/minetro/latte-parsedown)
[![Downloads total](https://img.shields.io/packagist/dt/minetro/latte-parsedown.svg?style=flat)](https://packagist.org/packages/minetro/latte-parsedown)
[![Latest stable](https://img.shields.io/packagist/v/minetro/latte-parsedown.svg?style=flat)](https://packagist.org/packages/minetro/latte-parsedown)
[![HHVM Status](https://img.shields.io/hhvm/minetro/latte-parsedown.svg?style=flat)](http://hhvm.h4cc.de/package/minetro/latte-parsedown)

[Parsedown](https://github.com/erusev/parsedown) parser for Latte.

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
