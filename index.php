<!DOCTYPE html>
<html ng-app="eventApp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVENT MANAGEMENT</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <script>
        var app = angular.module('eventApp', []);

        app.controller('MainController', function ($scope) {
            $scope.currentIndex = 0;

            $scope.showSlide = function (index) {
                var slides = angular.element(document.querySelector('.slides'));
                var totalSlides = angular.element(document.querySelectorAll('.slide')).length;

                if (index >= totalSlides) {
                    $scope.currentIndex = 0;
                } else if (index < 0) {
                    $scope.currentIndex = totalSlides - 1;
                } else {
                    $scope.currentIndex = index;
                }

                var translateValue = -$scope.currentIndex * 100 + '%';
                slides.css('transform', 'translateX(' + translateValue + ')');
            };

            
            setInterval(function () {
                $scope.$apply(function () {
                    $scope.showSlide($scope.currentIndex + 1);
                });
            }, 1500); 
        });

        app.controller('FooterController', function ($scope) {
            $scope.currentYear = new Date().getFullYear();
        });
    </script>
</head>

<body ng-controller="MainController" style="background-color: rgb(253, 250, 247);">

    <div class="header">
        <div class="logo">
            <img src="https://tse1.mm.bing.net/th?id=OIP.US1bODz8gcmCx9QKuqZRHwHaHa&pid=Api&P=0&h=180"
                alt="logo" width="100" height="100">
        </div>
        <div class="buttoncol">
            <nav>
                <a href="home.html"><i class="fa fa-fw fa-home"></i> Home</a>
                <a href="createevents.php">Create Events</a>
                <a href="events.php">Events</a>
                <a href="fulldetails.php">details</a>
                <a href="contact.html">Contact</a>
                <a href="payment.html">payment</a>
                <a href="registration.html"><i class="fa fa-fw fa-envelope"></i>Signup</a>
                <a href="login.html"><i class="fa fa-fw fa-user"></i> Login</a>
                
            </nav>
        </div>
    </div>

    <div class="slider-container">
        <div class="slides">
          
          <div class="slide"><img class="one"src="https://tse2.mm.bing.net/th?id=OIP.0WmK0kSx81D46suOsr7yvQHaE0&pid=Api&P=0&h=180" alt="Slide 2"></div>
          <div class="slide"><img class="one"src="https://tse4.mm.bing.net/th?id=OIP.dTdRG0H4ow7kylXx04z23wHaEK&pid=Api&P=0&h=180" alt="Slide 3"></div>
          <div class="slide"><img class="one"src="https://tse4.mm.bing.net/th?id=OIP.EYo7qnCPYHZaKG9GhPE-GgHaFx&pid=Api&P=0&h=180" alt="Slide 1"></div>
          <div class="slide"><img class="one"src="https://tse1.mm.bing.net/th?id=OIP.9KicVaat1HLtquv4YY_KQwHaFl&pid=Api&P=0&h=180" alt="Slide 3"></div>
         
        </div>
      </div>
    <div class="row">
        <div class="column" style="background-color:lightcyan">
            <h2 style="color:rgb(209, 6, 6)">A Welcome  Message to Event Management</h2>
            <p style="font-size: larger;color:black">EVENT MANAGEMENT<br>
    
                Event management is the process by which events are defined, planned, monitored, controlled and delivered such that the agreed benefits are realised.<br>
                
                Events are unique transient endeavours undertaken to achieve a desired outcome. Successful event management has several significant characteristics.
                
                Planning and managing events can be stressful for everyone involved. Your team may have the experience, knowledge and capabilities, but without a solid event management plan, you may not see the results you desire. <br>
                
                 Instead, create an automated and centralised Event Management plan that will guide you and your team to a common goal.
                
                You can include the number of attendees and speakers, the number of asked questions, the number of drunk coffees, and so on. Use infogr.am to create beautiful infographics in a super easy way. <br>
                
                With pride and excitement,<br>[Event Apps]</p> 
        </div>
        <div class="column" style="background-color:white">
          
            
                <img  style="margin-left:5px;height:495px;width:740px;"src="https://www.whsuites.com/wp-content/uploads/2020/09/crm-for-event-management.jpg">
      
            
          </div>
        </div>
      </div>
      <div class="row1">
        <div class="column1" style="background-color:aliceblue">
            <h1 style="color:blueviolet;text-decoration: underline;">Events</h1>
          <img style= " margin-left:100px;height:300px;width:200px;;"src="https://i.pinimg.com/originals/35/59/fb/3559fb53385f23b8fa8930f957aee360.jpg">
          <p> Events of the H.Y.D. Kukatpally, alekhyachowdary Office</p>
            With pride and excitement,<br>[All events are Available]</p> 
            <img style= " margin-left:100px;height:300px;width:200px;"src="https://tse4.mm.bing.net/th?id=OIP.kbyMdaGgOPlYcY2VBqBNdgHaFt&pid=Api&P=0&h=180">
            <p>Developing a content strategy for your events can help bring value to your customers so they keep coming back.</p>
            <img style= " margin-left:100px;height:300px;width:200px;" src="https://tse4.mm.bing.net/th?id=OIP.0Fbh-YlLIq769oGkQQZ8QQAAAA&pid=Api&P=0&h=180">
            <p>By creating a valuable content strategy for events, you’ll help solidify your event as a “thought leader” while drawing in a larger audience of readers who might also be interested in attending an event.</p>
        </div>
        <div class="column2" style="background-color:rgb(239, 237, 236);">
          <h1 style="color:coral;text-decoration: underline;" >History</h2>
          <p style="color:cadetblue;font-size:19px;">You may have more than one event, or you could be spending all year planning just one, either way, the question to ask yourself is, “How can I consistently create quality content for events?” In other words, understand where your event can add value.

            In order to create a fantastic content strategy for events, you must first understand how your event and the expertise that your business has gained can add value to your audience.</p>
        </div>
        <div class="column1" style="background-color:aliceblue;">
          <h1 style="color:darkgreen;text-decoration: underline;">Event types</h1>
          <img style= " margin-left:80px;height:300px;width:300px;margin-bottom: 50px;" src="https://tse4.mm.bing.net/th?id=OIP.g9crwaP9jyVt1QxkS_nP4wHaFw&pid=Api&P=0&h=180">
          <img style= " margin-left:80px;height:300px;width:300px;margin-bottom: 50px;" src="https://tse4.mm.bing.net/th?id=OIP.P5Rn1YF0W7_-857EMEEavwHaE8&pid=Api&P=0&h=180">
          <img style= " margin-left:60px;height:350px;width:350px;margin-bottom: 50px;" src="https://tse4.mm.bing.net/th?id=OIP.IgwBMzjIOAECaRYkKhxpbAHaEo&pid=Api&P=0&h=180">
          <img style= " margin-left:80px;height:300px;width:300px;margin-bottom: 50px;" src="https://tse4.mm.bing.net/th?id=OIP.Ym3r0YVWvqD1pIGHOrtt3QHaEC&pid=Api&P=0&h=180">
          <img style= " margin-left:60px;height:350px;width:350px;margin-bottom: 50px;" src="https://tse2.mm.bing.net/th?id=OIP.51xGanwcSRzkuJZ5Xd_d8QHaEm&pid=Api&P=0&h=180">
        </div>
      </div>

    <footer ng-controller="FooterController">
        <p style="text-align: left; font-size: 20px;">&copy; {{currentYear}} Your Website. All rights reserved.</p>
        <button class="button" style="position: absolute; top: 1807px; right: 150px;">
            <a href="registration.html"> login</a>
        </button>
    </footer>
</body>

</html>