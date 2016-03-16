# 使用 Travis CI 自動測試

[![Build Status](https://travis-ci.org/kingispeak/PHPUnit.svg?branch=master)](https://travis-ci.org/kingispeak/PHPUnit)

**使用 Travis CI 自動測試**

Travis CI 與 GitHub 高度整合，只要你對GitHub push之後，Travis CI 就能自動從 GitHub 抓最新版的 code，並執行 PHPUnit，最後將測試結果 email 給你。

# Installation

`git clone https://github.com/kingispeak/PHPUnit.git`

`cd PHPUnit`

`composer install`

# Usage

`vendor/bin/phpunit tests/`