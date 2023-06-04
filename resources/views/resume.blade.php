<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Resume</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/resume.css')}}">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

	<div class="container">
        <h2>Personal Information</h2>
        <div class="faq-main">
            <div class="faq-item">
                <div class="faq-label">Personal Details<i></i></div>
                <div class="faq-cont">
                    <form>
                        <div class="form-group">
                          <label for="fname">Enter Your First Name</label>
                          <input type="fname" class="form-control" id="fname" aria-describedby="fname" placeholder="Enter First Name">
                          <small id="fname" class="form-text text-muted">We'll never share your Data with anyone else.</small>
                        </div>
                          <div class="form-group">
                            <label for="lname">Enter Your Phone Number</label>
                            <input type="tel" class="form-control" id="phone" aria-describedby="tel" placeholder="Enter Number">
                          </div>
                          <div class="form-group">
                            <label for="dob">Date of Birth:</label>
                            <input id="dob" name="DateOfBirth" type="text" placeholder="Enter Your Date of Birth">
                          </div>
                          <div class="form-group">
                              <label for="gender">Gender:</label>
                              <select id="gender" name="Gender">
                                <option value="">Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <div id="emailcontain">
                            <label for="email">Email:</label>
                            <input id="email" name="Email" placeholder="Enter Your Email">
                            <button onclick="addemail(event)">+</button>
                        </div>
                          </div>
                          <div class="form-group">
                            <div id="phonecontain">
                            <label for="phone">Phone:</label>
                            <input id="phone" name="Phone" placeholder="Enter Your phone">
                            <button onclick="addphone(event)">+</button>
                        </div>
                          </div>
                          <div class="form-group">
                          <label for="religion">Religion:</label>
                          <select id="religion" name="Religion">
                            <option value="">Select Religion</option>
                            <option value="Islam">Islam</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Christianity">Christianity</option>
                            <option value="Buddhist">Buddhist</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="blood">Blood Group:</label>
                        <select id="blood" name="BloodGroup">
                            <option value="">Select Blood Group</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nationality">Nationality:</label>
                        <select id="nation" name="nation">
                            <option value="">Select Nationality</option>
                            <option value="Bangladeshi">Bangladeshi</option>
                        </select>
                    </div>
                        <button type="submit" class="btn btn-primary">Next</button>
                      </form>
                    
                </div>
            </div>




            <div class="faq-item">
                <div class="faq-label">Address Details<i></i></div>
                <div class="faq-cont">
                    <form>
                        <div class="form-group">
                          <label for="address">Enter Address</label>
                          <input type="text" class="form-control" id="address" aria-describedby="fname" placeholder="Enter Address">
                        
                        </div>
                        <div class="form-group">
                            <label for="city">Enter Your City</label>
                            <input type="city" class="form-control" id="city" aria-describedby="city" placeholder="Enter city">
                            
                          </div>
                          <div class="form-group">
                            <label for="zipcode">Enter Your Zip Code</label>
                            <input type="number" class="form-control" id="zipcode" aria-describedby="tel" placeholder="Enter Zip/Post code">
                            
                          </div>
                        <button type="submit" class="btn btn-primary">Next</button>
                      </form>
                </div>
            </div>
            
            


            <div class="faq-item">
              <div class="faq-label">Prefred Address<i></i></div>
              <div class="faq-cont">
                  <form>
                      <div class="form-group">
                        <label for="address">Enter Address</label>
                        <input type="text" class="form-control" id="address" aria-describedby="fname" placeholder="Enter Address">
                      
                      </div>
                      <div class="form-group">
                          <label for="city">Enter Your City</label>
                          <input type="city" class="form-control" id="city" aria-describedby="city" placeholder="Enter city">
                        </div>
                      <button type="submit" class="btn btn-primary">Next</button>
                    </form>
              </div>
          </div>
          

          <!-- <div class="faq-item">
            <div class="faq-label">Other Relevant Information<i></i></div>
            <div class="faq-cont">
                <form>
                    <div class="form-group">
                      <label for="Text">Enter Info</label>
                      <input type="text" class="form-control" id="address" aria-describedby="fname" placeholder="Enter Info">
                    </div>
                    <button type="submit" class="btn btn-primary">Next</button>
                  </form>
                
            </div>
        </div> -->
        <div class="container">
        <h2>Academic Information</h2>
        <div class="faq-main">
            <div class="faq-item">
                <div class="faq-label">Academic Details<i></i></div>
                <div class="faq-cont">
                    <form>
                        <div id="educationcontain">
                            <h2>Academic</h2>
                          <div class="form-group">
                              <label for="education">Level of Education:</label>
                              <input id="education" name="Education" required>
                          </div>
                          <div class="form-group">
                            <label for="exam">Exam/Degree Title:</label>
                            <input id="degree" name="Degree" required>
                        </div>
                        <div class="form-group">
                            <label for="group">Major/Group:</label>
                            <input id="major" name="Major" required>
                        </div>
                        <div class="form-group">
                            <label for="init">Institute Name:</label>
                            <input id="init" name="Institute" required>
                        </div>
                        <div class="form-group">
                            <label for="result">Result:</label>
                            <input id="res" name="Result" required>
                        </div>
                        <div class="form-group">
                            <label for="duration">Duration:</label>
                            <input id="du" type="Number" name="Duration" required>
                        </div>
                        <div class="form-group">
                            <label for="year">Passing Year:</label>
                            <input id="year" type="Number" name="year" required>
                        </div>
                        
                        </div>

                        <button onclick="addeducation(event)">+</button>
                        <button type="submit" class="btn btn-primary">Next</button>
                          </div>
                          
                        
                      </form>
                    
                </div>
            </div>




            
        </div>
    </div>


<script src="{{asset('js/script.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

</body>
</html>