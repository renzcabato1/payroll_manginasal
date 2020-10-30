<!DOCTYPE html>
<html>
<head>
<title>PAYROLL</title>
<link rel="shortcut icon" type="image/x-icon" href="views/images/icon.ico" />
<link rel="stylesheet" href="views/css/font-awesome.min">

<style>
#myInput {
    background-image: url('views/css/search.png'); /* Add a search icon to input */
    background-position: 10px 12px; /* Position the search icon */
    background-repeat: no-repeat; /* Do not repeat the icon image */
    width: 30%; /* Full-width */
    font-size: 16px; /* Increase font-size */
    padding: 12px 20px 12px 40px; /* Add some padding */
    border: 1px solid black; /* Add a grey border */
   background-size: 15px;
}



#customers th, #customers td {
    text-align: left; /* Left-align text */
    padding: 12px; /* Add padding */
}

#customers tr {
    /* Add a bottom border to all table rows */
    border-bottom: 1px solid #ddd; 
}

#customers tr.header, #customers tr:hover {
    /* Add a grey background color to the table header and on hover */
    background-color: #f1f1f1;
}
.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial;
}

.navbar a {
    float: left;
    font-size: 10px;
    color: white;
    text-align: center;
    padding: 14px 8px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 10px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
<style>
#container {
	color:black;
	border-style: groove;
	
}
#description {
 background-color: #4CAF50;
	color: black;
	width: 100%;
	height: 11px;
	border-top: 1px solid #4CAF50;
	border-bottom: 1px solid #4CAF50;
	padding-bottom:3px;
	font-style: italic;

	
}


body{
	
background-image: url(css/bg1.jpg);	

	color: #fff;
	font-family: Arial;
	font-size: 12px;
	 background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
	background-size: 100% 100%;
	border:1px;
}

</style>
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width:100%;
	color:black;
	
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #5cd65c;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
<style>
input[type=text], select {
  
    padding:5px 10px;
    margin: 4px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=number], select {
  
    padding:5px 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {

    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}
img:hover { 
    background-color: yellow;
}
</style>

<script>
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("customers");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 1; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>
<script>
function AllowOnlyNumbers(e) {

    e = (e) ? e : window.event;
    var key = null;
    var charsKeys = [
        97, // a  Ctrl + a Select All
        65, // A Ctrl + A Select All
        99, // c Ctrl + c Copy
        67, // C Ctrl + C Copy
        118, // v Ctrl + v paste
        86, // V Ctrl + V paste
        115, // s Ctrl + s save
        83, // S Ctrl + S save
        112, // p Ctrl + p print
        80 // P Ctrl + P print
    ];

    var specialKeys = [
    8, // backspace
    9, // tab
    27, // escape
    13, // enter
    35, // Home & shiftKey +  #
    36, // End & shiftKey + $
    37, // left arrow &  shiftKey + %
    39, //right arrow & '
    46, // delete & .
    45 //Ins &  -
    ];

    key = e.keyCode ? e.keyCode : e.which ? e.which : e.charCode;

    //console.log("e.charCode: " + e.charCode + ", " + "e.which: " + e.which + ", " + "e.keyCode: " + e.keyCode);
    //console.log(String.fromCharCode(key));

    // check if pressed key is not number 
    if (key && key < 48 || key > 57) {

        //Allow: Ctrl + char for action save, print, copy, ...etc
        if ((e.ctrlKey && charsKeys.indexOf(key) != -1) ||
            //Fix Issue: f1 : f12 Or Ctrl + f1 : f12, in Firefox browser
            (navigator.userAgent.indexOf("Firefox") != -1 && ((e.ctrlKey && e.keyCode && e.keyCode > 0 && key >= 112 && key <= 123) || (e.keyCode && e.keyCode > 0 && key && key >= 112 && key <= 123)))) {
            return true
        }
            // Allow: Special Keys
        else if (specialKeys.indexOf(key) != -1) {
            //Fix Issue: right arrow & Delete & ins in FireFox
            if ((key == 39 || key == 45 || key == 46)) {
                return (navigator.userAgent.indexOf("Firefox") != -1 && e.keyCode != undefined && e.keyCode > 0);
            }
                //DisAllow : "#" & "$" & "%"
            else if (e.shiftKey && (key == 35 || key == 36 || key == 37)) {
                return false;
            }
            else {
                return true;
            }
        }
        else {
            return false;
        }
    }
    else {
        return true;
       }
    }
</script>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <Script>
        $(document).ready(function(){
            $(".inputs").keyup(function () {
                $this=$(this);
                if ($this.val().length >=$this.data("maxlength")) {
                  if($this.val().length>$this.data("maxlength")){
                    $this.val($this.val().substring(0,3));
                  }
                  $this.next(".inputs").focus();
                }
             });
        });
    </Script>
	<Script>
        $(document).ready(function(){
            $(".inputs1").keyup(function () {
                $this=$(this);
                if ($this.val().length >=$this.data("maxlength")) {
                  if($this.val().length>$this.data("maxlength")){
                    $this.val($this.val().substring(0,2));
                  }
                  $this.next(".inputs1").focus();
                }
             });
        });
    </Script><Script>
        $(document).ready(function(){
            $(".inputs2").keyup(function () {
                $this=$(this);
                if ($this.val().length >=$this.data("maxlength")) {
                  if($this.val().length>$this.data("maxlength")){
                    $this.val($this.val().substring(0,4));
                  }
                  $this.next(".inputs2").focus();
                }
             });
        });
    </Script>
	<style>
	input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0; 
}
	</style>
	
</head>


</html>

