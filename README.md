# Acme Lightning Extend

This is an example project that extends the Lightning Distribution of Drupal - giving users a different out of the box experience than Lightning with additional code and configuration. It makes use of the Lightning Extend feature by defining additional dependencies in a `lightning.extend.yml` file.

## Why

This functionality is useful for developers who want all the benefits of Lightning but need additional out of the box code, configuration, and user experience.

## Background

To build this example, we:

Started with the [`acquia/lightning-project` template](https://github.com/acquia/lightning-project)
Added some composer dependencies
Created a custom module that provides some simple configuration
Exported additional configuration as Feature modules
Copied the Lightning-provided `lightning.extend.yml` file to sites/default
Enabled our additional extensions and provided a redirect path via that file

## Demo

<iframe width="560" height="315" src="https://www.youtube.com/embed/F41Lb1oTHk0" frameborder="0" allowfullscreen></iframe>

## Instructions

This project is meant as an example, but if you want to try it out:

* Clone this repo
* From VCS root, run `composer install`
* Point your browser to the docroot directory inside VCS root. _(You can also use drush to install the site, but a large part of this functionality is for users who don't have CLI access)_

