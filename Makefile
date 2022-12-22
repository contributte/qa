.PHONY: install tests

install:
	composer update

tests:
	vendor/bin/tester -s -p php --colors 1 -C tests/Cases

snapshots:
	vendor/bin/phpcs --standard=tests/Sets/base/2-bad/codesniffer.xml  --report=checkstyle --no-colors -q tests/Sets/base/2-bad > tests/Sets/base/2-bad/snapshot.txt
