# LSA Course Guide Redesign

GIF GOES HERE - TODO

This project is my attempt to recreate the [LSA Course Guide](https://www.lsa.umich.edu/cg/) as a single-page application that requires no page refreshes for actions such as searching for classes or clicking on a class to see more information about it. Additionally, I added in some extra features that I wished were in the official course guide, such as being able to view course grade distributions directly in the class info, without having to open them in a new tab.

IMAGE OF GRADEGUIDE XFRAME GOES HERE - TODO

### Installing

I apologize in advance if these directions do not work on your computer. If you notice any mistakes, feel free to submit a pull request.

```
1. Install PHP
2. Install Laravel & Laravel Valet
3. Clone this Repository
4. Use "npm run dev" to launch the app after making changes
5. Close out any incognito tabs you have open currently
6. Open http://course-guide.test in a new incognito window, to avoid caching
7. Repeat steps 4-6 every time you make changes to the code
```

## Built With

BUILT WITH IMAGES GO HERE - TODO

* [Vue.js](https://vuejs.org/) - The main JavaScript framework used
* [Laravel](https://laravel.com/) - Used to access the apis and get around [CORS](https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS)
* [Vue-multiselect](https://vue-multiselect.js.org/) - Used to make the multiselect dropdowns
* [BootstrapVue](https://bootstrap-vue.js.org/) - Used to make website responsive on mobile devices, and to simplify actions like calling api when a specific class is clicked
* [Axios](https://github.com/axios/axios) - Used to send requests to the Laravel/PHP backend

## Authors

 * [KrithikVallem](https://github.com/KrithikVallem)

## Acknowledgments

* [LSA Technology Services](https://lsa.umich.edu/technology-services/), for making the official LSA Course Guide as well as providing the APIs that this project couldn't function without. Thank you for everything you guys do to help us! :)
* [Hardik Savani](https://twitter.com/HardikSavani19) for his [great tutorial](https://www.itsolutionstuff.com/post/laravel-vue-js-axios-post-request-example-and-demoexample.html) that inspired me to build this project
