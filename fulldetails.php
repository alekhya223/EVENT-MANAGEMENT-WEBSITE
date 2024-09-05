<!DOCTYPE html>
<html ng-app="myApp">

<head>
    <title>Event Planner</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
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
            margin: 10px 0 5px;
            color: #333;
        }

        input,
        select,
        textarea,
        button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
            padding: 15px 25px;
            border: none;
            border-radius: 6px;
            display: inline-block;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        select {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
        }

        input[type="checkbox"] {
            margin-right: 5px;
        }

        /* Additional styles for improved layout */
        select,
        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="tel"],
        input[type="date"] {
            margin-bottom: 15px;
        }

        /* Responsive styles for larger screens */
        @media (min-width: 768px) {
            div {
                width: 60%;
            }

            form {
                max-width: 900px;
            }
        }
    </style>
</head>

<body>
    <div ng-controller="myCtrl">
        <h1>Event Planner</h1>
        <form name="plannerForm" method="post" action="fulldetailsdb.php" method='post'>
            <label for="planningForOrganization">Are you planning this event for another organization?</label>
            <select id="planningForOrganization" name="planningForOrganization" ng-model="planningForOrganization">
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" ng-model="email" placeholder="Enter your email">

            <label for="city">City:</label>
            <input type="text" id="city" name="city" ng-model="city" placeholder="Enter your city">

            <label for="country">Country/Region:</label>
            <select id="country" name="country" ng-model="country">
                <option value="India">India</option>
                <option value="United States">United States</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="Canada">Canada</option>
                <option value="Australia">Australia</option>
                <option value="Germany">Germany</option>
                <!-- Add more country options as needed -->
            </select>

            <label for="state">State/Province:</label>
            <input type="text" id="state" name="state" ng-model="state" placeholder="Enter your state/province">

            <label for="createCventAccount">Create my free Cvent account using these details</label>
            <input type="text" id="organization" name="organization" ng-model="organization" placeholder="Enter your organization name">
            <input type="number" id="commissionRate" name="commissionRate" ng-model="commissionRate" placeholder="Enter commission rate">

            <label for="clientOrganization">Client Organization</label>
            <input type="text" id="clientOrganization" name="clientOrganization" ng-model="clientOrganization" placeholder="Enter client organization name">

            <label for="industry">Industry</label>
            <input type="text" id="industry" name="industry" ng-model="industry" placeholder="Enter industry">

            <label for="responses">When do you need to hear from venues by?</label>
            <input type="date" id="responses" name="responses" ng-model="responses">

            <label for="contactPreference">How do you prefer to be contacted?</label>
            <select id="contactPreference" name="contactPreference" ng-model="contactPreference">
                <option value="Phone or email">Phone or email</option>
                <option value="Other">Other</option>
            </select>

            <label for="sharing">By checking this box, I agree to share the personal information provided on this RFP to the selected hotels. To learn more, read Cvent's Privacy Policy and Terms of Use.</label>
            <input type="checkbox" id="sharing" name="sharing" ng-model="sharing">

            <button type="submit">Submit</button>
        </form>
    </div>
    <script>
        var app = angular.module("myApp", []);

        app.controller("myCtrl", function($scope) {
            // Add any additional logic you need for your controller
        });
    </script>
</body>

</html>
