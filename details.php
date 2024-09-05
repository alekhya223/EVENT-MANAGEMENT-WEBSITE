<!DOCTYPE html>
<html ng-app="myApp">

<head>
  <title>Event details</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .Event-details-form {
      margin: 0 auto;
      width: 100%;
      max-width: 500px;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .Event-details-form h3 {
      text-align: center;
      font-size: 1.5rem;
      margin-bottom: 20px;
      color: #333;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      color: #555;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      margin-bottom: 10px;
      box-sizing: border-box;
    }

    .form-group input[type="checkbox"] {
      margin-top: 5px;
    }

    .btn-submit {
      background-color: #007bff;
      color: white;
      border: 1px solid #007bff;
      border-radius: 5px;
      padding: 10px 20px;
      cursor: pointer;
      display: block;
      width: 100%;
      text-align: center;
    }

    .btn-submit:hover {
      background-color: #0056b3;
    }
  </style>

  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>

<body>
  <div class="container Event-details-form">
    <h3>Event Details</h3>
    <div class="form-group">
      <label for="eventName">Event Name:</label>
      <input type="text" id="eventName" name="eventName" ng-model="eventName" placeholder="Enter Event Name">
    </div>
    <div class="form-group">
      <label for="eventDate">Event Date:</label>
      <input type="date" id="eventDate" name="eventDate" ng-model="eventDate">
    </div>
    <div class="form-group">
      <label for="eventTime">Event Time:</label>
      <input type="time" id="eventTime" name="eventTime" ng-model="eventTime">
    </div>
    <div class="form-group">
      <label for="eventLocation">Event Location:</label>
      <input type="text" id="eventLocation" name="eventLocation" ng-model="eventLocation" placeholder="Enter Event Location">
    </div>
    <div class="form-group">
      <label for="eventOrganizer">Event Organizer:</label>
      <input type="text" id="eventOrganizer" name="eventOrganizer" ng-model="eventOrganizer" placeholder="Enter Event Organizer">
    </div>
    <div class="form-group">
      <label for="eventContactInformation">Event Contact Information:</label>
      <input type="text" id="eventContactInformation" name="eventContactInformation" ng-model="eventContactInformation" placeholder="Enter Event Contact Information">
    </div>
    <div class="form-group">
      <input type="checkbox" id="isAttendingEvent" name="isAttendingEvent" ng-model="isAttendingEvent"> Is Attending Event
    </div>

    <h3>Enter Event Details</h3>
    <div class="form-group">
      <label for="eventId">Event ID:</label>
      <input type="text" id="eventId" name="eventId" ng-model="eventId" placeholder="Enter Event ID" required>
    </div>
    <div class="form-group">
      <label for="eventName">Event Name:</label>
      <input type="text" id="eventName" name="eventName" ng-model="eventName" placeholder="Enter Event Name" required>
    </div>

    <button type="submit" class="btn-submit">Check Event</button>
  </div>
</body>

</html>
