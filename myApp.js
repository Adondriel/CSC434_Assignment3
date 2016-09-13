//Only the mainProject supports the Summary tag.
var app = angular.module('myApp', [])
    .controller('myController', ['$scope', function ($scope) {
        $scope.projectList = {
            "mainProject": {
                "title": "Assignment 2",
                "desc": "This project required me to create a home page, that would index my further projects(this page), a page that contains examples of html, and a page that contains examples of different PHP code, with source code.",
                "img": "assets/images/html5.jpg",
                "links": [
                    {
                        "url": "html_examples.html",
                        "urlWords": "HTML Examples"
                    },
                    {
                        "url": "php_examples.php",
                        "urlWords": "PHP Examples"
                    },
                    {
                        "url": "https://github.com/Adondriel/CSC434_Assignment2",
                        "urlWords": "Github Repository"
                    }
                ]
            },
            "projects": [
                {
                    "title": "Assignment 1",
                    "img": "assets/images/webserver.png",
                    "desc": "This project required me to create a very simple web server, that accepted requests from a client, and then responded with a result.",
                    "links": [
                        {
                            "url": "https://github.com/Adondriel/CSC434_Assignment1",
                            "urlWords": "Github Repository"
                        }
                    ]
                }
	]
        }

}])
    .config([
    '$compileProvider',
    function ($compileProvider)
        {
            $compileProvider.aHrefSanitizationWhitelist(/^\s*(https?|ftp|mailto|chrome-extension|mumble):/);
            // Angular before v1.2 uses $compileProvider.urlSanitizationWhitelist(...)
    }
]);