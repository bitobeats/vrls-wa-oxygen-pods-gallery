==============================
Oxygen Pods Gallery Workaround
==============================
This plugin makes possible to use Pods Gallery with the Oxygen's Gallery element. It's not the most
elegant solution, but it works, considering you have Pods installed and don't have ACF installed.

Attention!
----------
This plugin needs Pods installed to work. Without Pods installed and activated, it won't work and will break
Oxygen's Gallery element.

Also, if you are using this plugin, you **must** not have ACF installed.

This is experimental software. Use this plugin at your own risk.


Requirements
------------
- WordPress 5.8 or higher
- Oxygen Builder
- Pods

Installation
------------
1. Download the plugin as a zip folder from this github repo: `<https://github.com/vitorrloureiro/vrls-oxygen-pods>`_
2. Install it manually in WordPress, uploading the zip folder you just downloaded.
3. Activate the plugin.

How to use
----------
To use this plugin, you only need to install and activate it. After that, whenever you use an Oxygen Gallery with ACF fields, it'll actually look for Pods fields.

To use the plugin:

1. Open Oxygen Builder
2. Insert the Gallery element. 
3. In 'Gallery Source', choose 'ACF'.
4. In 'ACF Field', insert the name of your Pods Gallery.

You're done =)


How it works
------------
This plugin works by changing the :code:`get_field()` function, normally setup by ACF.
It doesn't change anything related to Oxygen, WordPress or any other plugin. It simply declares
the :code:`get_field()` function.

It's not built respecting Oxygen's standards or anything. It should work as a workaround while
a better (and update-proof) solution is developed.

Uninstall
---------
To uninstall this plugin, simply deactivate it and uninstall it from WordPress admin area.
This plugin doesn't write to the database, so there are no leftovers.

Contributors
-------------
The main code you'll find in this plugin came directly from `@GrantigeOma <https://github.com/GrantigeOma>`_.

I simply wrapped it in a plugin =)