



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="academicsystem.css">
    <!-- bootstrap only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


<!--   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

<!---jquery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<title>Dashboard - <?php include('dist/includes/title.php');?></title>
</head>
<body>
    <div class="main_container">
        <!---  side bar     -->
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

            <div class="side-bar-container">
                <div class="container_1" id="flip1">
                    <span>SCHEDULE  MANAGEMENT</span>
                </div>
                <div class="text_container" id="show1" >
                    <!-- <span><a href="classchedule.php">TEACHERS SCHEDULE  </a></span> -->
                    <span><a href="pages/home.php">SCHEDULING  </a></span>
                 </div>


                 <div class="container_1" id="flip2">
                    <span>FACULTY REPORT</span>
                </div>
                <div class="text_container" id="show2">
                    <span><a href="">STUDENT MASTERLIST </a></span><br>
                    <span>  <a href="">TEACHERS LIST</a> </span><br>
                    <span><a href="">LESSON FOR CMO  </a></span>
                 </div>

                 <div class="container_1" id="flip3">
                    <span>GRADE MANAGEMENT</span>
                </div>
                <div class="text_container" id="show3">
                    <span><a href="">GRADE REPORT </a></span><br>
                    <span> <a href="">LIST OF GRADUATING STUDENT  </a></span><br>
                    <span><a href="">LIST OF HONOR STUDENT  </a></span>
                 </div>

                 <div class="container_1" id="flip4">
                    <span>REPORT MONITORING</span>
                </div>
                <div class="text_container" id="show4">
                    <span><a href="">Report Schedule   </a></span><br>
                    <span> <a href="">Faculty Reports</a>  </span><br>
                    <span> <a href="">MEMO  </a></span><br>
                    <span><a href="">Monitoring Report  </a></span>
                 </div>
                 <div class="container_1" id="flip2">
                    <a href="index.php"><span>LOGOUT</span></a>
                </div>
            </div>

         </div>

    <!---NAV BAR BOOTSRAP-->
    <nav class="navbar navbar-dark bg-primary" >
        
        <div class="container-text-nav">BESTLINK COLLEGE OF THE PHILIPPINES</div> 
        <div class="container-fluid">
            <img src="bcp.png" alt="Logo" width="40" class="d-inline-block align-text-top"> 
         </div>
        <div class="nav-close">
            <span style="font-size:30px;cursor:pointer" class="right" onclick="openNav()">&#9776;</span>
        </div>
      </nav>
</div>
    <!-- side bar-->









    <script>
        /*       SIDE BAR FUNCTION           */
        var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
   /*       SIDE BAR FUNCTION           */


$(document).ready(function(){
    $('#flip1').click(function(){
            $('#show1').slideToggle("slow");
   })
   $('#flip2').click(function(){
            $('#show2').slideToggle("slow");
   })
   $('#flip3').click(function(){
            $('#show3').slideToggle("slow");
   })
   $('#flip4').click(function(){
            $('#show4').slideToggle("slow");
   })

})
 

    </script>
    
</body>
</html>