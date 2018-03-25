# figma-preview
Get rendered *.PNG from Figma node using the [Figma API](https://www.figma.com/developers/docs)

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

## Demo (live embeds)

![Image 1/3](http://mst.works/figma-preview/?file=Ui4YzD3oQcxJSbzBEr80O9eU&node-id=523:2671&format=.png) | ![Image 2/3](http://mst.works/figma-preview/?file=Ui4YzD3oQcxJSbzBEr80O9eU&node-id=26:1454&format=.png) | ![Image 3/3](http://mst.works/figma-preview/?file=Ui4YzD3oQcxJSbzBEr80O9eU&node-id=18:646&format=.png)
--- | --- | ---
Source: [Figma URL](https://www.figma.com/file/Ui4YzD3oQcxJSbzBEr80O9eU/Working-Draft-UI?node-id=523%3A2671) |  Source: [Figma URL](https://www.figma.com/file/Ui4YzD3oQcxJSbzBEr80O9eU/Working-Draft-UI?node-id=26%3A1454) |  Source: [Figma URL](https://www.figma.com/file/Ui4YzD3oQcxJSbzBEr80O9eU/Working-Draft-UI?node-id=18%3A646)

**Notes about image handling on GitHub.com:**

> If you upload an image to GitHub, the URL of the image will be modified so your information is not trackable.
> 
> To host your images, GitHub uses the [open-source project Camo](https://github.com/atmos/camo). Camo generates an anonymous URL proxy for each image that starts with https://camo.githubusercontent.com/ and hides your browser details and related information from other users.
> 
> Anyone who receives your anonymized image URL, directly or indirectly, may view your image. To keep sensitive images private, restrict them to a private network or a server that requires authentication instead of using Camo.

Source: https://help.github.com/articles/about-anonymized-image-urls/
