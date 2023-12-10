const hiddenElements = document.querySelectorAll(".hidden");

// ABOUT LINK

var aboutLink = document.getElementsByClassName("alinks");
var linkContent = document.getElementsByClassName("link-content");

function openlink(linkID) {
  for (alink of aboutLink) {
    alink.classList.remove("active-link");
  }
  for (linkc of linkContent) {
    linkc.classList.remove("active");
  }
  // event.currentTarget.classList.add('active-link');
  document.getElementById(linkID).classList.add("active");
}

function createStudentDiv() {
  let studentDiv = document.createElement("div");
  studentDiv.className = "studentDetails";

  studentDiv.innerHTML = `
  <br><br>
  <h4>Enter student Details for Student ${i+1}</h4>
    <label for="sid">Student ID*</label>
    <input type="sid" id="sid" name="sid${i}" placeholder="Student ID eg. 2021PE0275" aria-describedby="emailHelp"
        required>
    
    <label for="s_name">Student Name*</label>
    <input type="s_name" id="s_name${i}" name="s_name${i}" placeholder="Student Full Name"
        aria-describedby="emailHelp" required>
    <br>
    <label for="dept">Select The Department*</label> <br>
    <select name="dept${i}" type="text" required="required"
        data-error="Please specify your need.">
        <option value="" selected disabled>
            --Select Your Department--
        </option>
        <option>CS</option>
        <option>IT</option>
        <option>EXTC</option>
        <option>ECS</option>
        <option>MECH</option>
        <option>AUTOMOBILE</option>
    </select>
    <br>
    <br>
<<<<<<< HEAD
    <label for="a_year">Academic Year*</label> <br>
    <select name="a_year${i}" type="text" required="required"
        data-error="Please specify your need.">
        <option value="" selected disabled>
            --Select the Academic Year--
        </option>
        <option>First year</option>
        <option>Second Year</option>
        <option>Third Year</option>
        <option>Final Year</option>
        
    </select>
    <br>
    <br>
=======
>>>>>>> 3773dd6a04f3e40c60efb98ea27f59c0ce44937e
    <label for="s_PH_no">Student Mobile number*</label>
    <input type="s_PH_no" id="s_PH_no${i}" name="s_PH_no${i}" pattern="^[0-9]{10,}$" placeholder="Student Mobile number"
        aria-describedby="emailHelp" required>
    <br>
    <label for="s_email">Student Email id*</label>
    <input type="s_email" id="s_email${i}" name="s_email${i}" placeholder="MES Email id "
        aria-describedby="emailHelp" required>
    <br>
    
    <label for="gender">Gender*</label> <br>
    <select name="gender${i}" type="text" required="required"
        data-error="Please specify your need.">
        <option value="" selected disabled>
            --Select the gender--
        </option>
        <option>Female</option>
        <option>Male</option>
        
    </select>
    </div>
    `;

  return studentDiv;
}

let studentNo = document.querySelector("#sno");
let studentRepeat = document.querySelector(".addStudents");


studentNo.addEventListener("change", () => {
  let studentNoValue = parseInt(studentNo.value, 10);
  studentRepeat.innerHTML = "";

  for (i = 0; i < studentNoValue; i++) {
    let studentBlock = createStudentDiv();
    studentRepeat.appendChild(studentBlock);
  }
});               