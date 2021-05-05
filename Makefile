.PHONY: install tests coverage-clover coverage-html

install:
	composer update

tests:
	vendor/bin/tester -i -p php
	vendor/bin/tester tests/Parsedown -s -p php