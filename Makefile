.PHONY: install tests

install:
	composer update

tests:
	vendor/bin/tester -s -p php --colors 1 -C tests/Cases

snapshots:
	vendor/bin/phpcs \
		--standard=tests/Sets/base/2-bad/codesniffer.xml \
		--file-list=tests/Sets/base/2-bad/codesniffer.files \
		--report=checkstyle \
		--no-colors \
		-q \
		--report-file=tests/Sets/base/2-bad/snapshot.txt \
		tests/Sets/base/2-bad
