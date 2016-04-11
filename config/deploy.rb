# config valid only for Capistrano 3.1
lock '>=3.2.1'

set :application, 'bekahlynnbaker.com'
set :repo_url, 'git@github.com:bekahlbaker/bekahlynnbaker.com.git'

set :linked_dirs, %w{wp-content/uploads wp-content/plugins/all-in-one-wp-migration/storage}
set :linked_files, %w{wp-config.php}
