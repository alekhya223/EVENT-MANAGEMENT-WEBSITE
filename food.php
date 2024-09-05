
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
<!DOCTYPE html>
<html ng-app="myApp">

<head>
  <title>Food Requirement</title>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>

<body>
  <div ng-controller="myCtrl">
    <label>
      Food Required:
      <input type="checkbox" ng-model="foodRequired" ng-change="updateButton()">
    </label>

    <button ng-click="bookEvent()" ng-disabled="!foodRequired">Submit</button>

    <div ng-show="foodRequired">
      <!-- Additional form elements related to food requirements can be added here -->
      <label>Food Type:</label>
      <input type="text" ng-model="foodType">
    </div>
  </div>

  <script>
    var app = angular.module("myApp", []);

    app.controller("myCtrl", function ($scope) {
      $scope.foodRequired = false;

      $scope.updateButton = function () {
        // You can add more conditions here based on your requirements
        // For example, enable the button only if food type is specified
        $scope.buttonDisabled = !$scope.foodRequired || (!$scope.foodType && $scope.foodRequired);
      };

      $scope.bookEvent = function () {
        // Implement your logic here
        if ($scope.foodRequired) {
          alert('Event booked with food requirement: ' + $scope.foodType);
        } else {
          alert('Event booked successfully!');
        }
      };
    });
  </script>
</body>

</html>

