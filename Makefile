.PHONY: install
install:
	composer update

.PHONY: tests
tests:
	vendor/bin/phpunit

.PHONY: paratest
paratest:
	vendor/bin/paratest

.PHONY: snapshots
snapshots:
	php bin/snapshots

.PHONY: docs
docs:
	echo "# Ruleset 8.2\n" > .docs/rulesets/ruleset-8.2.md && vendor/bin/phpcs --standard=ruleset-8.2.xml -e >> .docs/rulesets/ruleset-8.2.md
	echo "# Ruleset 8.3\n" > .docs/rulesets/ruleset-8.3.md && vendor/bin/phpcs --standard=ruleset-8.3.xml -e >> .docs/rulesets/ruleset-8.3.md
	echo "# Ruleset 8.4\n" > .docs/rulesets/ruleset-8.4.md && vendor/bin/phpcs --standard=ruleset-8.4.xml -e >> .docs/rulesets/ruleset-8.4.md
	echo "# Ruleset next\n" > .docs/rulesets/ruleset-next.md && vendor/bin/phpcs --standard=ruleset-next.xml -e >> .docs/rulesets/ruleset-next.md
