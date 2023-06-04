$(document).ready(function() {
  $("#dob").datepicker({
    dateFormat: "yy-mm-dd",
    changeMonth: true,
    changeYear: true
  });
});

function addemail(event) {
  event.preventDefault();
  
  var container2 = document.getElementById("emailcontain");


  var newInput2 = document.createElement("div");
  newInput2.className = "input";
  newInput2.innerHTML = `
    <label for="email">Email:</label>
      <input id="email" name="Email" placeholder="Enter Your Email">`;

  
  container2.appendChild(newInput2);
}

function addphone(event){
  event.preventDefault();
  var container = document.getElementById("phonecontain");

  var newInput = document.createElement("div");
  newInput.className = "input";
  newInput.innerHTML = `
    <label for="phone">Phone:</label>
    <input id="phone" name="Phone" placeholder="Enter Your phone">
  `;

  container.appendChild(newInput);

}

function addeducation(event){
  event.preventDefault();

  var container = document.getElementById("educationcontain");

  var academicCount = container.querySelectorAll("h2").length + 1;

  var newInput = document.createElement("div");
  newInput.className = "input";
  newInput.innerHTML = `
  <h2>Academic ${academicCount}</h2>
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

  `;

  container.appendChild(newInput);
}



let items = document.querySelectorAll(".faq-main .faq-item .faq-label");
items.forEach(function (t) {
	t.addEventListener("click", function (e) {
		items.forEach(function (e) {
			e !== t || e.classList.contains("faq-item-show")
				? e.classList.remove("faq-item-show")
				: e.classList.add("faq-item-show");
		});
	});
});





