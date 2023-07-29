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
    <label for="sid">Student ID*</label>
    <h4>Enter student Details for Student ${i+1}</h4>
    <input type="sid" id="sid" name="sid${i}" placeholder="sid" aria-describedby="emailHelp"
        required>
    
    <label for="s_name">Student Name*</label>
    <input type="s_name" id="s_name${i}" name="s_name${i}" placeholder="s_name"
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
    <label for="s_PH_no">Student Mobile number*</label>
    <input type="s_PH_no" id="s_PH_no${i}" name="s_PH_no${i}" placeholder="s_PH_no"
        aria-describedby="emailHelp" required>
    <br>
    <label for="s_email">Student Email id*</label>
    <input type="s_email" id="s_email${i}" name="s_email${i}" placeholder="s_email"
        aria-describedby="emailHelp" required>
    <br>
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
