# Torque Child Theme Boilerplate

## GET STARTED

1.  Copy entire torque-child-theme directory into themes.

    - Include package.json, webpack.config.js, and other config files
    - Exclude node_modules if for some reason it exists

2.  Find and replace the following in the entire directory: **Note:** do not use numbers or special characters

    1.  Waldos (eg 905 Fulton)
    2.  waldos (eg 905-fulton-child) **Note:** best practise is to include -child at the end
    3.  Waldos (eg Fulton)
    4.  https://github.com/vallgroup/Torque-Waldos (eg https://github.com/vallgroup/Torque-Theme)
    5.  Waldos (eg Fulton)

3.  Rename all files in this directory: {torque-child_theme}-etc-class.php => {waldos}-etc-class.php

4.  Add 'waldos' to cli/lib/workspaces.sh

5.  Open new terminal, and in **project** root, run:

    ```sh
    $ yarn
    ```

    to install/link dependencies.

6.  Return to 'developing' docs in parent theme to finish setting up the new client branch.

7.  Delete the README up to here and fill in the rest.

# Changelog

## [1.0.0]

### Added

### Changed

### Removed
