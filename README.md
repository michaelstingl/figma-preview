# figma-preview
Get rendered *.PNG from Figma node

This is only a PoC for local testing. It is not recommended to run in production!!!

**Run local:**

```
git clone https://github.com/michaelstingl/figma-preview.git
cd figma-preview
sed -i -e 's/XX-XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX/replace-with-your-personal-access-token/g'  index.php
php -S localhost:8080
```

**Return image data:**

http://localhost:8080/?file=Ui4YzD3oQcxJSbzBEr80O9eU&node-id=18:646&format=.png

**Return `$imageUrl` as text:**

http://localhost:8080/?file=Ui4YzD3oQcxJSbzBEr80O9eU&node-id=18:646&format=.debug
