<html>
<head>
<title> thiagarajar college of engineering </title>
</head>
<body style="background-color:white;">
<center>
<h2>THIAGARAJAR COLLEGE OF ENGINEERING </h2>
</center>
<center>
<marquee direction="right" height="45" width="800" bgcolor="white" behavior="alternate">  
“ADMISSION WILL BE GRANTED ON MERIT BASIS” 
</marquee>  
</center>

<style>
body
{
background-image : url('capture.jpeg');background-repeat: no-repeat;background-size :100% 100%;
}
</style>

<center>
<marquee>
<img src="images.jpeg" width="450" height="250">
<img src="download.jpeg" width="450" height="250">
<img src="s.jpeg" width="450" height="250">
<img src="ss.jpeg" width="450" height="250">
</marquee>
</center>


<div align="center">
<h2>
Application Form:
</h2>
<form align ="right" style="background-color:grey;width:400px;height:210px">

NAME:<input name=sname><br>
FATHER_NAME:<input name=fname><br>
MOTHER_NAME:<input name=mname><br>
SCHOOL_NAME:<input name=scname><br>
TOTAL_MARKS:<input name=marks><br>
COURSE_APPLIED:<input name=cname><br>

<input type=submit name=sub>
</form>
</div>


<h2> DEPARTMENTS </h2>
<p style="color:blue"> courses enrolled in college are:</p>

<h5>DATA SCIENCE</h5> 
<a href="https://www.tce.edu/academics/departments/data-science/"> visit DS course</a>
<h5>COMPUTER SCIENCE</h5> 
 <a href="https://www.tce.edu/academics/departments/computer-science-engineering/"> visit CSE course</a>
<h5>INFORMATION TECHNOLOGY</h5> 
 <a href="https://www.tce.edu/academics/departments/information-technology/"> visit IT course</a>
<h5>ELECTRONICS AND COMMUNICATION ENGINEERING</h5> 
 <a href="https://www.tce.edu/academics/departments/electronics-and-communication-engineering/"> visit ECE course</a>
<h5>ELECTRICAL ELECTRONICS ENGINEERING</h5> 
 <a href="https://www.tce.edu/academics/departments/electrical-and-electronics-engineering/"> visit EEE course</a>


<div align="center">
<h2>Welcome to Thiagarajar College of Engineering</h2>
<p>
Founded in 1957 by philanthropist and industrialist Late Shri.Karumuttu Thiagarajan Chettiar, Thiagarajar College of Engineering (TCE) is a Government Aided Institution and affiliated to Anna University and situated in Madurai, the Temple City .The college is funded by Central and State Governments and Management. The courses offered in TCE are approved by the All India Council for Technical Education (AICTE), New Delhi and Council of Architecture (COA), New Delhi. TCE was granted Autonomy in the year 1987 and the programmes have been accredited by the National Board of Accreditation (NBA). TCE offers 9 Undergraduate programmes, 10 Postgraduate programmes and Doctoral programmes in Engineering, Architecture and Science.
</p>

<h2>Our Vision</h2>

<p>
To provide world class quality technical education with strong ethical values.
</p>
</div>

</body>
</html>

<?php
if(isset($_GET["sub"]))
{
   extract($_GET);
   $linkid=mysqli_connect("localhost","root","","odd");
   $s="insert into app values('$sname','$fname','$mname','$scname',$marks,'$cname')";
  echo $s;
   $q=mysqli_query($linkid,$s);
if($q==1)
   echo "<script> alert('insert') </script>";
else
   echo "<script> alert('not insert') </script>";
}

?>