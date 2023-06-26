<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Registration Form</title>
	<link rel="stylesheet" href="{{asset('css/job.css')}}">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>


    <script>
    $(document).ready(function() {
  $("#dl").datepicker({
    dateFormat: "yy-mm-dd",
    changeMonth: true,
    changeYear: true,
    yearRange: "1980:2050"
  });
});

  </script>
  <script type="text/javascript">
		function yesno(that){
			if(that.value=="Yes"){
				
				document.getElementById("ifYes").style.display = "block";
			}
			else{
				document.getElementById("ifYes").style.display = "nonr";
			}
		}
	</script>
</head>
<body>
<form action="{{route('job-post')}}" method="post" class="job-post">
    @csrf

<div class="wrapper">
    <div class="title">
      Job Post
    </div>
    <div class="form">
       <div class="inputfield">
          <label>Job Title</label>
          <input type="text" name="job" class="input">
       </div>

       <div class="inputfield">
          <label>Company Name</label>
          <input type="text" name="company" class="input" value="{{ session('names') }}">
       </div>  

       <div class="inputfield">
          <label>Company Mail</label>
          <input type="text" name="companymail" class="input" value="{{ session('mails') }}">
       </div>  

       <div class="inputfield">
          <label>Vaccancies</label>
          <input type="number" name="vaccan" class="input">
       </div>  
      <div class="inputfield">
          <label>Employment Status</label>
          <select class="custom_select" id="empstatus" name="emp">
            <option value="">Select</option>
            <option value="FullTime">Full Time</option>
            <option value="PartTime">Part Time</option>
            <option value="Intership">Intership</option>
          </select>
       </div>

       <div class="inputfield">
          <label>Gender</label>
          <select class="custom_select" id="gender" name="gender">
            <option value="">Select</option>
            <option value="Only Male">Only Male</option>
            <option value="Only Female">Only Female</option>
            <option value="Both male and female">Both male and female</option>
          </select>
       </div> 
        
        <div class="inputfield">
          <label>Age</label>
          <input type="text" name="age" class="input">
       </div>
       <div class="inputfield">
          <label>Experience</label>
          <input type="text" name ="experience" class="input">
       </div> 
      <div class="inputfield">
          <label>Job Location</label>
          <input type="text" name="loc" class="input">
       </div> 
      <div class="inputfield">
          <label>Job Responsibilities</label>
          <textarea class="textarea" name="reponsibiliti"></textarea>
       </div> 
       <div class="inputfield">
          <label>Job Requirment</label>
          <textarea class="textarea" name="requirment"></textarea>
       </div> 
       <div class="inputfield">
          <label>Salary</label>
          <select class="custom_select" name="Salary" onchange="yesno(this)">
	<option value="">Select</option>
    <option value="Negotitable">Negotitable</option>
	<option value="Yes">SelectRange</option>
</select>
<div id="ifYes" class="inputfield" style="display:none;">
	<input type="text" name ="Salary" class="input">
</div>
       </div> 
       <div class="inputfield">
          <label>Deadline</label>
          <input id="dl" type="text" name="DeadLIne"class="input">
       </div> 
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>Agreed to terms and conditions</p>
       </div> 
      <div class="inputfield">
        <input type="submit" value="Register" class="btn">
      </div>
    </div>
</div>	
</form>
</body>
</html>