# Formation Drupal 7
```
git clone
drush make -y lyon.make --force-complete --ignore-checksums --prepare-install --donwload-mechanism-curl --no-cache --translations=fr;
drush site-install -y lyon --account-name=gfi --account-pass=gfi --account-mail=gfi-lyon@gfi.fr --db-url=mysql://root:gfidev@localhost/d7.gfi-lyon --site-name='GFI Lyon' --locale='fr'
drush cc all -y
drush l10n-update
```
