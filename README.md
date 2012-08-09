# Attribute Fix
Fixes the endless conversion of HTML elements in product attribute options, e.g. `&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;`.

## INSTALLATION
- Modman required: <http://code.google.com/p/module-manager/>
<pre>
curl http://module-manager.googlecode.com/files/modman-1.1.5 > modman
chmod +x modman
sudo mv modman /usr/bin
</pre>
- Enable "Allow Template Symlinks" in System > Configuration > Developer.
- Initialize modman:
<pre>
cd [magento root folder]
modman init
</pre>
- Install via modman:
<pre>
modman attribute-fix clone https://github.com/cgdangelo/attribute-fix.git
</pre>
