<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}

/* Set height of body and the document to 100% */
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial;
}

/* Style tab links */
.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 25%;
}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: white;
  display: none;
  padding: 100px 20px;
  height: 100%;
}

#Home {}
#News {background-color: green;}
#Contact {background-color: blue;}
#About {background-color: orange;}
</style>
</head>
<body>

<button class="tablink" onclick="openPage('Home', this)">About</button>
<button class="tablink" onclick="openPage('News', this)" id="defaultOpen">For Applicants</button>
<button class="tablink" onclick="openPage('Contact', this)">For Parents </button>
<button class="tablink" onclick="openPage('About', this)">Contact</button>

<div id="Home" class="tabcontent">
  <h3>Home</h3>
  <p>Home is where the heart is..</p>
</div>

<div id="News" class="tabcontent">
  <h3>News</h3>
  <!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<style >
 .w3-container w3-center{
  position: center;
 }
  .tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 25%;
}
.tablink:hover {
  background-color: #777;
}
/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: white;
  display: none;
  padding: 100px 20px;
  height: 100%;
}
.description_doughnut{
  color: rgb(94, 139, 108);
  font-family: fantasy;
  text-align: center;
}
.description_pie{
color: rgb(200, 65, 108);
font-family: fantasy;
text-align: center;
}
.description_bar{
  color: rgb(23, 78, 137);
  font-family: fantasy;
  text-align: center;
}
#About {background-color: red;}
#News {background-color: green;}
#Contact {background-color: blue;}
#About {background-color: orange;}
</style>
<body>
<!-- Content will go here -->

<section>
  <img class="mySlides" src="https://www.ppic.org/wp-content/uploads/elementary-school-building-1024x675.jpg" style="width:100%;height: 500px">
  <img class="mySlides" src="https://archello.s3.eu-central-1.amazonaws.com/images/2020/07/31/comas-pont-arquitectes-slp-school-library-libraries-archello.1596195113.2499.jpg" style="width:100%;height: 500px">
  <img class="mySlides" src="https://media.gettyimages.com/photos/teacher-looking-in-books-with-children-picture-id143560401?k=6&m=143560401&s=612x612&w=0&h=qZqXHLXCaKWoTzY0iTPYjCw01rcyLQbuIOl2jalLjfQ=" style="width:100%;height: 500px">
</section>
<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}
</script>
  <!-- Band Description -->
<section class="w3-container w3-center w3-content" style="max-width:600px">
  <h2 class="w3-wide">WELCOME TO SCHOOL</h2>
  <p class="w3-opacity"><i>Let us remember: One book, one pen, one child and one teacher can change the world.</i></p>
  <p class="w3-justify"> Our graduates enter the best world and domestic universities, such as Harvard, MIT, Yale, Princeton, Berkley, Oxford, Cambridge, Warwick, Nazarbayev University, KazNU named after Al-Farabi, KBTU, KazNTU them. K. Satpayev, Moscow State University, Moscow State Technical University named after N.E. Bauman, MIPT, MGIMO, etc. Thus, over the past ten years, RFMS graduates have entered the following world leading universities;</p>
</section>
<section class="w3-row-padding w3-center w3-white">
  <article class="w3-third">
    <p>#1</p>
    <img src="https://media.istockphoto.com/photos/perfect-final-exam-score-marked-with-100-picture-id96956225" alt="Random Name" style="width:100%;height: 324px">
    <p>High university entrance scores (UNT).</p>
  </article>
  <article class="w3-third">
    <p>#2</p>
    <img src="https://image.freepik.com/free-vector/modern-education-concept-with-flat-design_23-2147919753.jpg" alt="Random Name" style="width:100%;height: 324px">
    <p>The presence of a physical and mathematical base for students</p>
  </article>
  <article class="w3-third">
    <p>#3</p>
    <img src="https://i0.wp.com/reachinghighernh.org/wp-content/uploads/2018/07/competency-portfolio-learning.png?fit=460,300&ssl=1" alt="Random Name" style="width:100%;height: 324px">
    <p style="color: green,font-size:20px">Reaching new aims by skills</p>
  </article>
</section>
  

  <h3>Appliction</h3>
  <!DOCTYPE html>
<html>
<head>
    <title>laravel 8 file upload example - ItSolutionStuff.com.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
  
<body>
<div class="container">
   
    <div class="panel panel-primary">
      <div class="panel-heading"><h2>Please uploud your file</h2></div>
      <div class="panel-body">
   
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
        @endif
  
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
  
        <form action="{{ route('file.upload.post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
  
                <div class="col-md-6">
                    <input type="file" name="file" class="form-control">
                </div>
   
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success">Upload</button>
                </div>
   
            </div>
        </form>
  
      </div>
    </div>
</div>
</body>
  
</html>
</div>
<hr>
  
  <!DOCTYPE html>
<html>
<head>
  <h3 class="description_bar">Our number of students</h3>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
</head>
<body>
<canvas id="myChart" width="200" height="50"></canvas>
<script type="text/javascript">
   var ctx = document.getElementById("myChart");
   var myChart = new Chart(ctx, {
      type: 'bar',
         data: {
            labels: ["2017" , "2018" , "2019", "2020","2021"],
            datasets: [
               { label: '',
               data: [5000,6000,12000,13000,15000],
               backgroundColor :['rgba(150, 150, 200, 1)',
               'rgb(124, 130, 255 )',
               'rgba(124, 255, 197 )',
               'rgba( 234, 144, 254)',
               'rgba(254, 219, 144 )',
            ],
         }
      ]
   },
   options: {
      scales: {
         yAxes: [{
            ticks: {
               beginAtZero:true
            }
         }]
      }
   }
});
</script>
</body>
</html>
<hr>
<!DOCTYPE html>
<html>
<head>
  <h3 class="description_pie">The majority of our students study at this universities </h3>
  <title></title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
</head>
<body>
<canvas id="myChart1" width="350" height="100"></canvas>
<script type="text/javascript">
  var ctx=document.getElementById("myChart1");
  var myChart=new Chart(ctx,{
    type:'pie',
    data:{
      labels:["Harvard","SDU","ABU-DABI","NU"],
      datasets:[
      {
        label:'The percentage of students entering high universities',
        data:[10,20,30,40],
        backgroundColor:[
        'rgba(127, 161, 135,1)',
        'rgba(206, 133, 132,1)',
        'rgba(242, 193, 118,1)',
        'rgba(0, 177, 169,1)',],
      }]
    },
    options:{
      scales:{
        yAxes:[{
          ticks:{
            beginAtZero:true
          }
        }]
      }
    }
  });
</script>
</body>
</html>
<hr>
<!DOCTYPE html>
<html>
<head>
  <h3 class="description_doughnut">Students will be developed at different sides</h3>
  <title>Students will be developed at different sides</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
</head>
<body>
<canvas id="myChart2" width="350" height="100"></canvas>
<script type="text/javascript">
  var ctx=document.getElementById("myChart2");
  var myChart=new Chart(ctx,{
    type:'doughnut',
    data:{
      labels:["Charity","Social Development","Experiential Development","EDUCATION"],
      datasets:[
      {
        label:'Our ',
        data:[10,20,30,40],
        backgroundColor:[
        'rgba(195, 225, 241,1)',
        'rgba(243, 225, 241,1)',
        'rgba(198, 139, 108,1)',
        'rgba(252, 139, 108,1)',],
      }]
    },
    options:{
      scales:{
        yAxes:[{
          ticks:{
            beginAtZero:true
          }
        }]
      }
    }
  });
</script>
</body>
</html>


 <!DOCTYPE html>
<html>
<head>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<footer class="w3-container w3-padding-64 w3-center w3-green w3-xlarge">
  <a href="#"><i class="fa fa-facebook-official"></i></a>
  <a href="#"><i class="fa fa-pinterest-p"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-flickr"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <p class="w3-medium">
    Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">school.kz</a>
  </p>
</footer>
</body>
</html>


</div>

<div id="Contact" class="tabcontent">
  <h3>Contact</h3>
  <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<h2>Responsive Contact Section</h2>
<p>Resize the browser window to see the effect.</p>

<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Swing by for a cup of coffee, or leave us a message:</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="/w3images/map.jpg" style="width:100%">
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>

</body>
</html>


</div>

<div id="About" class="tabcontent">
  <h3>About</h3>
  <p>Who we are and what we do.</p>
</div>

<script>
function openPage(pageName,elmnt) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   
</body>
</html> 
