
<div id="top"></div>

<div align="center">

<img src="https://svg-rewriter.sachinraja.workers.dev/?url=https%3A%2F%2Fcdn.jsdelivr.net%2Fnpm%2F%40mdi%2Fsvg%406.7.96%2Fsvg%2Fyoutube.svg&fill=%23FF0000&width=200px&height=200px" style="width:200px;"/>

<h3 align="center">ACF OAUTH for YouTube.</h3>

<p align="center">
    For Wordpress and ACF.
</p>    
</div>

##  1. <a name='TableofContents'></a>Table of Contents


* 1. [Table of Contents](#TableofContents)
* 2. [About The Project](#AboutTheProject)
	* 2.1. [Built With](#BuiltWith)
	* 2.2. [Installation](#Installation)
* 3. [Credentials](#Credentials)
* 4. [Usage](#Usage)
* 5. [Customising](#Customising)
* 6. [Troubleshooting](#Troubleshooting)
	* 6.1. [OAUTH Issues](#OAUTHIssues)
* 7. [Contributing](#Contributing)
* 8. [License](#License)
* 9. [Contact](#Contact)
* 10. [Changelog](#Changelog)



##  2. <a name='AboutTheProject'></a>About The Project

More info on the oAuth process here: https://ioroot.com/posts/wordpress-oauth/ 

More info at:                                                           
- https://dev.to/ioroot/google-oauth-wordpress-youtube-service-api-4ko6    
- https://ioroot.com/wordpress-oauth-and-ajax/                             
- https://github.com/IORoot/wp-plugin__oauth-demo   

<p align="right">(<a href="#top">back to top</a>)</p>


###  2.1. <a name='BuiltWith'></a>Built With

This project was built with the following frameworks, technologies and software.

* [ACF](https://advancedcustomfields.com/)
* [google-api-php-client](https://github.com/googleapis/google-api-php-client)
* [PHP](https://php.net/)
* [Wordpress](https://wordpress.org/)

<p align="right">(<a href="#top">back to top</a>)</p>



###  2.2. <a name='Installation'></a>Installation

These are the steps to get up and running with this plugin.

1. Clone the repo into your wordpress plugin folder
    ```bash
    git clone https://github.com/IORoot/wp-plugin__oauth--YouTube ./wp-content/plugins/ACF-Oauth-YouTube
    ```
1. Activate the plugin.

##  3. <a name='Credentials'></a>Credentials 
1. Make sure that you have downloaded the crendials json file from the google api console.
1. Saved it in the root of the project called client_secret.json
1. The .gitignore is listing that file (so you don't add it to git!)
1. `define('YOUTUBE_GOOGLE_APPLICATION_CREDENTIALS', __DIR__.'/client_secret.json');`


<p align="right">(<a href="#top">back to top</a>)</p>

##  4. <a name='Usage'></a>Usage

Use in any ACF Panels as a new button.

Also see [https://github.com/IORoot/wp-plugin__oauth--gCAL](https://github.com/IORoot/wp-plugin__oauth--gCAL) for more help.

##  5. <a name='Customising'></a>Customising

None.

##  6. <a name='Troubleshooting'></a>Troubleshooting

###  6.1. <a name='OAUTHIssues'></a>OAUTH Issues


1. Ensure HTTPS is working. (Make sure cert is created and added to keychain)


2. Ensure the address of the `Authorised redirect URIs` has the correct URIs in it's list.
```
https://dev.exporter.londonparkour.com/wp-admin/admin-ajax.php
```
Preferably at the top of the list.

3. Ensure `Authorised JavaScript origins` in the google console APIs 'credentials' has the 
domain:
```
https://dev.exporter.londonparkour.com
```

<p align="right">(<a href="#top">back to top</a>)</p>


##  7. <a name='Contributing'></a>Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue.
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<p align="right">(<a href="#top">back to top</a>)</p>



##  8. <a name='License'></a>License

Distributed under the MIT License.

MIT License

Copyright (c) 2022 Andy Pearson

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

<p align="right">(<a href="#top">back to top</a>)</p>



##  9. <a name='Contact'></a>Contact

Author Link: [https://github.com/IORoot](https://github.com/IORoot)

<p align="right">(<a href="#top">back to top</a>)</p>


##  10. <a name='Changelog'></a>Changelog

v1.0.0 - Initial.
