owncloud-theme
==============

This ownCloud theme used by CESNET is supposed to work together
with the *user_shib* app, which can be found [here](https://github.com/mirekys/user_shib).

To enable this theme, put the *cesnet* folder into your *owncloud/themes/* directory and
add this into your config/config.php:

```
'theme' => 'cesnet',
```

You may need to copy the following directories to the owncloud root directory,
as they doesn't seem to be picked by ownCloud from inside a theme:

```
cesnet/core/ajax
cesnet/lib
```
