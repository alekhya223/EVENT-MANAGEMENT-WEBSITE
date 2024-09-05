<!DOCTYPE html>
<html ng-app="myApp">
<head>
    <title>Create Event</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('https://www.manxeon.com/uploads/5/7/4/4/5744459/event-management2_orig.jpg');
        }

        h1 {
            text-align: center;
            color: #333;
        }

        div {
            width: 500px;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.95);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
        }

        label {
            font-weight: bold;
            display: block;
        }

        input, select, textarea, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        textarea {
            resize: vertical;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .error-message {
            color: red;
        }

        /* Additional Styles */
        input:hover, select:hover, textarea:hover, button:hover,
        input:focus, select:focus, textarea:focus {
            border-color: #90caf9;
            outline: none;
        }

        select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 4 5"><path fill="%23333" d="M2 0L0 2h4zM2 5L0 3h4z"/></svg>');
            background-repeat: no-repeat;
            background-position: right 10px top 50%;
            padding-right: 30px;
        }

        @media (max-width: 600px) {
            div {
                width: 90%;
                box-sizing: border-box;
            }

            form {
                max-width: none;
            }
        }

        button.loading {
            background-color: #a5d6a7;
            pointer-events: none;
        }
    </style>
</head>
<body>
    <div ng-controller="myCtrl">
        <h1>Book event</h1>
        
        <form name="signInForm" method="post" action="fulldetails.php">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" ng-model="name" placeholder="Enter your name" required>

            <label for="eventType">Event Type:</label>
            <select id="eventType" name="type" ng-model="eventType" required>
                <option value="">Select event type</option>
                <option value="marriage">Marriage</option>
                <option value="engagement">Engagement</option>
                <option value="function">Function</option>
                <option value="birthday_party">Birthday Party</option>
            </select>

            <label for="phoneNumber">Phone Number:</label>
            <input type="tel" id="phoneNumber" name="phone" ng-model="phoneNumber" placeholder="Enter your phone number" pattern="[0-9]{10}" title="Please enter a valid 10-digit phone number" required>

            <label for="date">Event Date:</label>
            <input type="date" id="date" name="date" ng-model="date" required>

            <label for="time">Event Time:</label>
            <input type="time" id="time" name="time" ng-model="time" required>

            <label for="meetingSpace">Meeting Space:</label>
            <select id="meetingSpace" name="meetingSpace" ng-model="meetingSpace" required>
                <option value="">Select option</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>

            <label for="attendeesPerDay">Attendees per day:</label>
            <input type="number" id="attendeesPerDay" name="attendeesPerDay" ng-model="attendeesPerDay" placeholder="Enter the number of attendees per day" max="100" required>
            <span class="error-message" ng-show="signInForm.attendeesPerDay.$error.max">Maximum value is 100</span>

            <label for="description">Event Description:</label>
            <textarea id="description" name="description" ng-model="description" placeholder="Enter a brief description of the event" required></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script>
        var app = angular.module("myApp", []);

        app.controller("myCtrl", function($scope) {
            $scope.name = "";
            $scope.eventType = "";
            $scope.phoneNumber = "";
            $scope.date = "";
            $scope.time = "";
            $scope.meetingSpace = "";
            $scope.attendeesPerDay = "";
            $scope.description = "";

            $scope.submitForm = function() {
                // Your form submission logic goes here
            };
        });
    </script>
</body>
</html>
