var app = angular.module('browseApp', []);

app.factory('redirectToDescription', function () {
    return {
        whenClick: function (object, path) {
          //TODO: Redirect logic
           var id = object.children().eq(0).val();
            window.location = "/childrenslibrarywithyii/web/index.php/browsebook/bookdescription?id=" + id;
        }
    }
});

app.factory('getBookCover', function () {
    return {
        paginate: function ($http, offset, $scope, model) {
                    $http({
                        url: "/childrenslibrarywithyii/web/index.php/browsebook/paginatebook",
                        method: "GET",
                        data: {"offset": offset},
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                    }).then(function successCallback(response) {
                        if( response.data.length != 0 ) {
                            angular.forEach(response.data, function (value, key) {
                               $scope.bookcovers.push(model.bookcover(value.id, value.image, value.title, value.author, value.colorTag, value.categoryTag));
                            })

                            $scope.firstSetOfBooks = $scope.bookcovers;
                        }
                    }, function errorCallback(response) {
                        console.log(response.statusTex);
                    });
                },

          filter: function($http, $scope, model, id, isImage) {
                var url = (isImage) ? "/childrenslibrarywithyii/web/index.php/browsebook/queryfilterbycategory" : "/childrenslibrarywithyii/web/index.php/browsebook/queryfilterbycolor";
                url = url + "?id=" + id;
                if($scope.filters.length == 1) {
                  $http({
                        url: url,
                        method: "GET",
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                    }).then(function successCallback(response) {
                      if( response.data.length != 0 ) {
                        var tempArray = [];
                         angular.forEach(response.data, function (value, key) {
                               tempArray.push(model.bookcover(value.id, value.image, value.title, value.author, value.colorTag, value.categoryTag));
                            })
                         $scope.bookcovers = tempArray;
                      } else {
                        $scope.bookcovers = [];
                      }
                    }, function errorCallback(response) {
                        console.log(response.statusTex);
                    });
                } else {
                    var tempArray = [];
                    angular.forEach($scope.bookcovers, function (value, key) {
                      var splitedValue;
                      if(isImage) {
                        splitedValue = value.category.split(",");
                      } else {
                        splitedValue = value.color.split(",")
                      }
                      angular.forEach(splitedValue, function (splited, key) {
                          if(splited == id) {
                              tempArray.push(model.bookcover(value.id, value.image, value.title, value.author, value.color, value.category));
                          } 
                      });
                      $scope.bookcovers = tempArray;
                    });

                }
            },

            remove: function ($http, $scope, model, url) {
                $http({
                        url: url,
                        method: "GET",
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                    }).then(function successCallback(response) {
                      if( response.data.length != 0 ) {
                        var tempArray = [];
                         angular.forEach(response.data, function (value, key) {
                               tempArray.push(model.bookcover(value.id, value.image, value.title, value.author, value.colorTag, value.categoryTag));
                            })
                         $scope.bookcovers = tempArray;
                      } else {
                        $scope.bookcovers = [];
                      }
                    }, function errorCallback(response) {
                        console.log(response.statusTex);
                    });
            }
          }
});

app.factory('bookcoverModel', function () {
    return  {
              bookcover: function (idtemp, imagetemp, titletemp, authortemp, colorTag, categoryTag) {
                return { id: idtemp, image: imagetemp, title: titletemp, author: authortemp, color: colorTag, category: categoryTag }
              },

              category: function (idtemp, name, src, flag) {
                return { id: idtemp, imageOrColor: src, label: name, isImage: flag }
              },

            }
});


app.directive('myBookList', [ 'redirectToDescription', '$location', function (redirectToDescription, $location) {
    return {
        restrict: 'A',
        link: function ($scope, element, attributes) {
            element.bind('click', function () {
                redirectToDescription.whenClick(element, $location.path());
            });
        }
    }
}]);

app.controller('bookCoverController', function ($scope, $http, getBookCover, bookcoverModel) {
    $scope.firstSetOfBooks = [];
    $scope.bookcovers = [];
    $scope.filters = [];
    angular.element(document).ready(function () {
        getBookCover.paginate($http, 0, $scope, bookcoverModel);
    });

    $scope.filter = function(el) {
       var elem = angular.element(el.currentTarget);
       var id = angular.element(elem.children()[0]).val();
       var name = angular.element(elem.children()[2]).text();
       var imgOrColor = angular.element(elem.children()[1]);
       if(imgOrColor.attr("src") != undefined) {
           doSomethingIfNotExist($scope.filters, id, true, function() {
            $scope.filters.push(bookcoverModel.category(id, name, imgOrColor.attr("src"), true));
          });

          getBookCover.filter($http, $scope, bookcoverModel, id, true);

       } else {
           doSomethingIfNotExist($scope.filters, id, false, function() {
            $scope.filters.push(bookcoverModel.category(id, name, imgOrColor.css("background-color"), false));
          });

          getBookCover.filter($http, $scope, bookcoverModel, id, false);
       }
    };


    $scope.remove = function (el) {
        var elem = angular.element(el.currentTarget);
        var id = angular.element(elem.children()[0]).val();
        angular.forEach($scope.filters, function(value, key) {
            if(value.id == id && value.isImage == (angular.element(elem.children()[1]).attr('src') != undefined)) {
              $scope.filters.splice(key, 1);
            }
        });

        if($scope.filters.length == 0) {
            $scope.bookcovers = $scope.firstSetOfBooks;
        } else {
            var url = "/childrenslibrarywithyii/web/index.php/browsebook/queryfilterwhenremove?";
            var counter = 0; 
            var counterForCat = [];
            var counterForColor = [];


            angular.forEach($scope.filters, function(value, key) {
                if(value.isImage) {
                  counterForCat.push(value.id);
                } else {
                  counterForColor.push(value.id);
                }
            });

            if(counterForCat.length != 0) {
              url += "idOfCat=" + counterForCat.join(",");
            }

            if(counterForColor.length != 0) {
              if(counterForCat.length > 0) {
                url += "&";
              }
              url += "idOfColor=" + counterForColor.join(",");
            } 
          getBookCover.remove($http, $scope, bookcoverModel, url);
        }

    };




});

function doSomethingIfNotExist(obj, id, isImage, callback) {
    var flag = true;
    if(obj.length == 0) {
        callback();
    } else {
        obj.forEach(function(elem) {
            if(elem.id == id && elem.isImage == isImage) {
                flag = false;
            }
        });

        if(flag) {
           callback();
        }
    }
}