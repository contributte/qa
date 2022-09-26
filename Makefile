.PHONY: tests fixes test-base fix-base test-php80 fix-php80 test-php81 fix-php81 test-next fix-next test-gamee fix-gamee

tests: test-base test-php80 test-php81 test-next test-gamee
fixes: fix-base fix-php80 fix-php81 fix-next fix-gamee

test-base:
	vendor/bin/phpcs --standard=tests/Base/codesniffer.xml tests/Base

fix-base:
	vendor/bin/phpcbf --standard=tests/Base/codesniffer.xml tests/Base

test-php80:
	vendor/bin/phpcs --standard=tests/Php80/codesniffer.xml tests/Php80

fix-php80:
	vendor/bin/phpcbf --standard=tests/Php80/codesniffer.xml tests/Php80

test-php81:
	vendor/bin/phpcs --standard=tests/Php81/codesniffer.xml tests/Php81

fix-php81:
	vendor/bin/phpcbf --standard=tests/Php81/codesniffer.xml tests/Php81

test-next:
	vendor/bin/phpcs --standard=tests/Next/codesniffer.xml tests/Next

fix-next:
	vendor/bin/phpcbf --standard=tests/Next/codesniffer.xml tests/Next

test-gamee:
	vendor/bin/phpcs --standard=tests/Gamee/codesniffer.xml tests/Gamee

fix-gamee:
	vendor/bin/phpcbf --standard=tests/Gamee/codesniffer.xml tests/Gamee
