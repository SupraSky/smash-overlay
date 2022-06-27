# smash-overlay
A streaming overlay to be used in OBS 

============================

INSTRUCTIONS
1. Launch the Web Server by running "Start Server" 

2. Add Browser Source in OBS with address "http://127.0.0.1:3000"
And use these parameters to configure the source :
Width : 1920
Height : 1080
Personnalized CSS : body { background-color: rgba(0, 0, 0, 0); background-image:none }
Check "Refresh browser when scene is active"

3. To Change / Update scores & Players in Overlay go to your Web Browser --> http://127.0.0.1:3000/admin.html
OR Use the provided "AdminPage" shortcut

4. When done, you can close the "Start Server" window

Optional :

To add your own flags, simply drop them in folder "lighttpd/assets/flags"
Make sure to use a squared and transparent picture, prefered sized 800x800 pixels


============================

Technologies & Products I used :
- lighttpd for Windows binary package 1.4.49-1 by dtech(.hu)
- PHP 8.1.7

Written using :
- HTML/CSS
- JavaScript
- PHP

============================

Patch Notes :

1.1 :

- Fixed the "Start Server" shortcut and replaced it with a batch file instead
- Fixed the width of the middle text displaying Tournament Name & Set to be the same length
- Changed the way flags are handled to ensure they stick to the overlay value, so you don't have to re-select them everytime
 
+ Added the feature to change overlay and text colors

1.0 :

- Initial release


TO DO :

- Intégration d'une liste des participants via start.gg