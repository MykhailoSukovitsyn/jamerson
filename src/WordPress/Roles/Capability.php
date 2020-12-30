<?php

declare(strict_types=1);

namespace MykhailoSukovitsyn\WordPress\Roles;

final class Capability
{
    const SWITCH_THEMES = 'switch_themes';
    const EDIT_THEMES = 'edit_themes';
    const EDIT_THEME_OPTIONS = 'edit_theme_options';
    const INSTALL_THEMES = 'install_themes';
    const ACTIVATE_PLUGINS = 'activate_plugins';
    const EDIT_PLUGINS = 'edit_plugins';
    const INSTALL_PLUGINS = 'install_plugins';
    const EDIT_USERS = 'edit_users';
    const EDIT_FILES = 'edit_files';
    const MANAGE_OPTIONS = 'manage_options';
    const MODERATE_COMMENTS = 'moderate_comments';
    const MANAGE_CATEGORIES = 'manage_categories';
    const MANAGE_LINKS = 'manage_links';
    const UPLOAD_FILES = 'upload_files';
    const IMPORT = 'import';
    const UNFILTERED_HTML = 'unfiltered_html';
    const EDIT_POSTS = 'edit_posts';
    const EDIT_OTHERS_POSTS = 'edit_others_posts';
    const EDIT_PUBLISHED_POSTS = 'edit_published_posts';
    const PUBLISH_POSTS = 'publish_posts';
    const EDIT_PAGES = 'edit_pages';
    const READ = 'read';
    const PUBLISH_PAGES = 'publish_pages';
    const EDIT_OTHERS_PAGES = 'edit_others_pages';
    const EDIT_PUBLISHED_PAGES = 'edit_published_pages';
    const DELETE_PAGES = 'delete_pages';
    const DELETE_OTHERS_PAGES = 'delete_others_pages';
    const DELETE_PUBLISHED_PAGES = 'delete_published_pages';
    const DELETE_POSTS = 'delete_posts';
    const DELETE_OTHERS_POSTS = 'delete_others_posts';
    const DELETE_PUBLISHED_POSTS = 'delete_published_posts';
    const DELETE_PRIVATE_POSTS = 'delete_private_posts';
    const EDIT_PRIVATE_POSTS = 'edit_private_posts';
    const READ_PRIVATE_POSTS = 'read_private_posts';
    const DELETE_PRIVATE_PAGES = 'delete_private_pages';
    const EDIT_PRIVATE_PAGES = 'edit_private_pages';
    const READ_PRIVATE_PAGES = 'read_private_pages';
    const DELETE_USERS = 'delete_users';
    const CREATE_USERS = 'create_users';
    const UNFILTERED_UPLOAD = 'unfiltered_upload';
    const EDIT_DASHBOARD = 'edit_dashboard';
    const CUSTOMIZE = 'customize';
    const DELETE_SITE = 'delete_site';
    const UPDATE_PLUGINS = 'update_plugins';
    const DELETE_PLUGINS = 'delete_plugins';
    const UPDATE_THEMES = 'update_themes';
    const UPDATE_CORE = 'update_core';
    const LIST_USERS = 'list_users';
    const REMOVE_USERS = 'remove_users';
    const ADD_USERS = 'add_users';
    const PROMOTE_USERS = 'promote_users';
    const DELETE_THEMES = 'delete_themes';
    const EXPORT = 'export';
    const EDIT_COMMENT = 'edit_comment';
    const CREATE_SITES = 'create_sites';
    const DELETE_SITES = 'delete_sites';
    const MANAGE_NETWORK = 'manage_network';
    const MANAGE_SITES = 'manage_sites';
    const MANAGE_NETWORK_USERS = 'manage_network_users';
    const MANAGE_NETWORK_THEMES = 'manage_network_themes';
    const MANAGE_NETWORK_OPTIONS = 'manage_network_options';
    const MANAGE_NETWORK_PLUGINS = 'manage_network_plugins';
    const UPLOAD_PLUGINS = 'upload_plugins';
    const UPLOAD_THEMES = 'upload_themes';
    const UPGRADE_NETWORK = 'upgrade_network';
    const SETUP_NETWORK = 'setup_network';
}
