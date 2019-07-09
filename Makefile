.PHONY: install
install:
	mkdir -p /usr/local/cpanel/3rdparty/exampleWebMailApp
	install -T ./index.php /usr/local/cpanel/3rdparty/exampleWebMailApp/index.php
	install -T ./icon.png /usr/local/cpanel/3rdparty/exampleWebMailApp/icon.png
	./scripts/conf_mongler.pl


.PHONY: uninstall
uninstall:
	rm /var/cpanel/webmail/webmail_exampleWebMailApp.yaml
	rm -rf /usr/local/cpanel/3rdparty/exampleWebMailApp
