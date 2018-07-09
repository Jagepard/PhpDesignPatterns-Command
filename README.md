[![Build Status](https://travis-ci.org/Jagepard/PhpDesignPatterns-Command.svg?branch=master)](https://travis-ci.org/Jagepard/PhpDesignPatterns-Command)
[![codecov](https://codecov.io/gh/Jagepard/PhpDesignPatterns-Command/branch/master/graph/badge.svg)](https://codecov.io/gh/Jagepard/PhpDesignPatterns-Command)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Jagepard/PhpDesignPatterns-Command/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Jagepard/PhpDesignPatterns-Command/?branch=master)
[![Code Climate](https://codeclimate.com/github/Jagepard/PhpDesignPatterns-Command/badges/gpa.svg)](https://codeclimate.com/github/Jagepard/PhpDesignPatterns-Command)
[![License: MIT](https://img.shields.io/badge/license-MIT-498e7f.svg)](https://mit-license.org/)
-----

# Command
Команда

Этот паттерн использует реализацию интерфейса «Команда», чтобы вызвать некий метод Исполнителя используя для этого известный Командиру метод «execute()». Командир просто знает, что нужно вызвать метод “execute()”, для обработки команды клиента, не разбираясь в деталях реализации Исполнителя. Исполнитель отделен от Командира.
