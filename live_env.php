# THIS FILE MUST BE KEPT SECRET! IT IS BLOCKED IN THE HTACCESS FILE
# HOWEVER, THIS DIRECTORY SHOULDN'T BE EXPOSED TO THE PUBLIC AT ALL
# SEE THE DOCS FOR PROPER (SECURE) INSTALLATION:
# https://docs.phpvms.net/installation/uploading
#
# This is the place to edit your configuration. To change a config that's
# not present here, you need to either edit the file/config in the config
# folder, or change it to read the value from the environment. Something like:
#
# 'some_key' = env('ENVIRONMENT_VARIABLE_KEY_ADDED_BELOW', 'default value')
#
# Various other settings in the configs also read from some environment variables
# by default. You can override those here

APP_KEY='base64:PGx9u7eevMkHKGd0fvpkXHBjAqeKcoEdYgu8fouSDQ4='
APP_NAME='phpVMS Dev Server'
SITE_NAME='phpVMS Dev Server'
APP_URL='https://crew.aalva.site'
APP_LOCALE=en

# When live, this should be "production". If testing locally, you can use "local"
APP_ENV=production
LOG_LEVEL=debug
APP_DEBUG=false
DEBUG_TOOLBAR=false

## DATABASE SETTINGS

DB_CONNECTION=mysql
DB_HOST='127.0.0.1'
DB_PORT=3306
DB_DATABASE='aalvqjco_cms'
DB_USERNAME='aalvqjco_admin'
DB_PASSWORD='vAAirlinesDEV2023!'
DB_PREFIX='cms_'
DB_SOCKET=

## CACHE SETTINGS
# https://docs.phpvms.net/config/optimizing#caching

CACHE_DRIVER=file
CACHE_PREFIX='phpvms_d_641e314fb0d0a'

## EMAIL SETTINGS

# Look at the available mail configs in config/mail.php
# Also refer to the Laravel docs here: https://laravel.com/docs/8.x/mail
# If you're using SMTP, I recommend setting the QUEUE_DRIVER to 'database'
# https://docs.phpvms.net/config/optimizing#queue-driver

MAIL_MAILER=log
MAIL_FROM_NAME='phpVMS Admin'
MAIL_FROM_ADDRESS='no-reply@phpvms.net'
MAIL_HOST=
MAIL_PORT=587
MAIL_ENCRYPTION=
MAIL_USERNAME=
MAIL_PASSWORD=

## QUEUE SETTINGS

# Set this to "database" if you have slow pages due to notifications/emails
# They will then be sent out via cron
QUEUE_DRIVER=sync

# If you're using the Laravel Queue Worker, set this to true. This will stop the queue tasks
# from being run during the cron job
# https://laravel.com/docs/8.x/queues#running-the-queue-worker
QUEUE_WORKER=false
