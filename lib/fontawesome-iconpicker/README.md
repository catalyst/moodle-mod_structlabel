FontAwesome Icon Picker
=======================

Source
------

https://github.com/farbelous/fontawesome-iconpicker

Installation
------------

- Copy fontawesome-iconpicker.js to amd/src/fontawesome-iconpicker.js
- Split `fontawesome-iconpicker.js` in two files
  - The jQuery plugin position.js to `jquery-position.js`
  - The icon picker to `fontawesome-iconpicker.js`
- Add `/* eslint-disable */` at the top of both files file
- Edit `fontawesome-iconpicker.js` to include dependency on `jquery-position`
  - Line 5: `define([ "jquery", "mod_structlabel/jquery-position" ], a);`
