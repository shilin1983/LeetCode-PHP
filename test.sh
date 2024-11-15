#!/bin/bash

echo "测试开始..."

composer dump-autoload -o

vendor/bin/pest --coverage --coverage-html coverage

open coverage/index.html

echo "测试结束！"
