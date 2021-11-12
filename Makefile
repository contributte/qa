.PHONY: tests test-base test-php74 test-php80 test-php81 test-next test-gamee

tests: test-base test-php74 test-php80 test-php81 test-next test-gamee

test-base:
	vendor/bin/phpcs --standard=tests/Base/codesniffer.xml tests/Base

test-php74:
	vendor/bin/phpcs --standard=tests/Php74/codesniffer.xml tests/Php74

test-php80:
	vendor/bin/phpcs --standard=tests/Php80/codesniffer.xml tests/Php80

test-php81:
	vendor/bin/phpcs --standard=tests/Php81/codesniffer.xml tests/Php81

test-next:
	vendor/bin/phpcs --standard=tests/Next/codesniffer.xml tests/Next

test-gamee:
	vendor/bin/phpcs --standard=tests/Gamee/codesniffer.xml tests/Gamee
