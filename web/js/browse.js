var app = angular.module('browseApp', []);

app.factory('redirectToDescription', function () {
    return {
        whenClick: function (object) {
          //TODO: Redirect logic
           var id = object.children().eq(0).val();
        }
    }
});

app.factory('getBookCover', function () {
    return {
        paginate: function ($http, offset, $scope, model) {
                    $http({
                        url: "http://localhost/childrenslibrarywithyii/web/index.php?r=browsebook/paginatebook",
                        method: "GET",
                        data: {"offset": offset},
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                    }).then(function successCallback(response) {
                        if( response.data.length != 0 ) {
                            angular.forEach(response.data, function (value, key) {
                               $scope.bookcovers.push(model.bookcover(value.id, value.image, value.title, value.author));
                            })
                        }
                    }, function errorCallback(response) {
                        console.log(response.statusTex);
                    });
                }
            }
});

app.factory('bookcoverModel', function () {
    return  {
              bookcover: function (idtemp, imagetemp, titletemp, authortemp) {
                return { id: idtemp, image: imagetemp, title: titletemp, author: authortemp }
              }
            }
});


app.directive('myBookList', [ 'redirectToDescription', function (redirectToDescription) {
    return {
        restrict: 'A',
        link: function ($scope, element, attributes) {
            element.bind('click', function () {
                redirectToDescription.whenClick(element);
            });
        }
    }
}]);

app.controller('bookCoverController', function ($scope, $http, getBookCover, bookcoverModel) {
    $scope.bookcovers = [];
    angular.element(document).ready(function () {
        getBookCover.paginate($http, 0, $scope, bookcoverModel);
    })
});