# TrollingArt

## Synopsis

New and improved infraestructure for http://TrollingArt.com. As a plus to the joke, the posts will link to Wikipedia API to obtain formal references about the work, it's location and the author.

Each artist will have his own social network profile, allowing to explore every published joke related with his particular work.

## Motivation

We want to refresh the discourse of the art enciclopedia and reveal it's funny side. 

##Tests

[![Video Sample](http://i.imgur.com/k7FLAYB.jpg)](https://www.youtube.com/embed/zxjR7RmtnDw)

Still a work in progress, but in the video you can see the code working: when you create a new user to the WP site vía wp-admin, and give it a "Wiki JSON" URL, the code will automatically retrieve and assign to that user the correct First Name, Last Name, Nickname and Biographical info (other features from the Wiki profile to be added soon).

Afterwards, when creating or editing a post, it can be assigned to a previously created user as an artist profile, so that basic author information for the artwork is displayed right below the post main content.

UPDATE 22/04/2016: The script now recovers the artist's picture from the Wiki page as "Wiki Pic". Useful for setting up the author's profile picture.

UPDATE 22/04/2016: Added functions for creating a meme image by adding the Post content as an image on the top of the Post's Featured Image.

UPDATE 23/04/2016: Artwork localization and description added to posts, obtained from Wikipedia API. Now you can see the Meme image, with the joke addeed, on the post; also you can see the map with the exact localization of the artwork.