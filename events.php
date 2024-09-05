<!DOCTYPE html>
<html ng-app="myApp">

<head>
  <title>Create Event</title>

  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      background-image: url('https://tse2.mm.bing.net/th?id=OIP.AI4xh5uVyJGRkg1DK-Qb9AHaFj&pid=Api&P=0&h=180');
      background-size: cover;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .overlay-box {
      background-color: rgba(255, 255, 255, 0.9);
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
      text-align: center;
      font-size: 18px; /* Increased font size for better readability */
    }

    h1 {
      color: #333;
      text-align: center;
      margin-bottom: 20px;
    }

    form {
      max-width: 900px; /* Increase the max-width */
      margin: 20px auto;
      padding: 30px;
      background-color: #ffffff;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin: 10px 0 5px;
      color: #333;
    }

    select {
      width: 100%;
      padding: 15px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 6px;
      box-sizing: border-box;
    }

    button {
      background-color: #4caf50;
      color: #ffffff;
      padding: 15px 25px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      display: inline-block;
      font-size: 16px;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #45a049;
    }

    img {
      margin: 5px;
      border-radius: 8px;
      display: block;
      max-width: 100%;
      height: auto;
      border: 1px solid #ddd;
      transition: transform 0.3s ease-in-out;
    }

    img:hover {
      transform: scale(1.1);
    }

    div.showImages {
      margin-top: 20px;
      max-width: 900px; /* Increase the max-width */
      margin-left: auto;
      margin-right: auto;
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); /* Adjusted the column width */
      gap: 20px;
    }

    @media (min-width: 768px) {
      /* Media query to display only three images per row on larger screens */
      div.showImages {
        grid-template-columns: repeat(3, 1fr);
      }
    }

    div.showImages img {
      width: 100%;
      height: auto;
      border-radius: 8px;
      transition: transform 0.3s ease-in-out;
    }
  </style>

  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>

<body>
  <div ng-controller="myCtrl">
    <div class="overlay-box">
      <h1>Create Event</h1>
      <form name="signInForm" method="post" action="createevents.php" method='post'>
        <!-- Existing form elements -->

        <label for="eventType">Event Type:</label>
        <select id="eventType" name="type" ng-model="eventType" ng-change="updateImages()" required>
          <option value="">Select event type</option>
          <option value="marriage">Marriage</option>
          <option value="engagement">Engagement</option>
          <option value="function">Function</option>
          <option value="birthday_party">Birthday_party</option>
        </select>

        <!-- Display multiple images based on the selected event type -->
        <div ng-show="showImages" class="showImages">
          <h2>Event Type: {{ eventType }}</h2>
          <div ng-repeat="imageUrl in getImageUrls(eventType)">
            <div style="border: 1px solid #ddd; border-radius: 8px; overflow: hidden;">
              <img ng-src="{{ imageUrl }}" alt="{{ eventType }}">
            </div>
              <p></p>
            <button>Book {{ eventType }} Event</button>
          </div>
        </div>

        <!-- Existing form elements -->

        <button type="submit">Submit</button>
      </form>
    </div>
  </div>

  <script>
    var app = angular.module("myApp", []);

    app.controller("myCtrl", function ($scope) {
      // Existing code

      // Function to update images based on the selected event type
      $scope.updateImages = function () {
        $scope.showImages = true;
      };

      // Function to get an array of image URLs based on event type
      $scope.getImageUrls = function (eventType) {
        switch (eventType) {
          case 'marriage':
            return ['photos/marriage1.jpg', 'photos/m2.jpg', 'photos/m3.jpg', 'photos/m4.jpg', 'photos/m5.jpg', 'photos/m6.jpg', 'photos/m7.jpg', 'photos/m8.jpg'];
          case 'engagement':
            return ['photos/e1.jpeg', 'photos/e6.jpeg', 'photos/e3.jpeg','photos/e4.jpeg','photos/e7.jpeg','photos/e2.jpeg','photos/e5.jpeg','photos/e8.jpg'];
          case 'Functions':
            return ['photos/n8.jpeg', 'photos/n2.jpeg', 'photos/n3.jpeg','photos/n4.jpeg','photos/n5.jpeg','photos/n6.jpeg','photos/n7.jpeg','photos/n1.jpeg'];
          case 'birthday_party':
            return ['photos/b1.jpeg', 'photos/b2.jpeg', 'photos/b3.jpeg','photos/b4.jpeg','photos/b5.jpeg','photos/b6.jpeg','photos/b7.jpeg','photos/b8.jpeg'];
          default:
            return ['photos/1_1.jpg'];
        }
      };

      // Function to handle booking the event
//      $scope.bookEvent = function () {
//        // Implement your booking logic here
//        alert('Event booked successfully!');
//      };
    });
  </script>
</body>
</html>
