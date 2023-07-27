function closealert(){
    document.getElementById('alert').style.padding='0px';
    document.getElementById('alert').innerHTML="";
}

let role=document.getElementById('role');
let userDetails=document.getElementById('userDetails');

role.addEventListener('change',()=>{
    let val=role.value;
    if(val=='Coordinator'){
        userDetails.innerHTML=`
        <label for="username">Enter your Username</label>
                <input type="username"  id="username" placeholder="Username" name="username"
                aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text"></div>
                
                
                <label for="password">Enter your Password</label>
                <input type="password"  placeholder="Password" id="password" name="password" required>

        `
    }else if(val=='HOD'){
        userDetails.innerHTML=`
        <label for="username">Enter your Username</label>
                <input type="username"  id="username" placeholder="Username" name="username"
                aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text"></div>
                
                
                <label for="password">Enter your Password</label>
                <input type="password"  placeholder="Password" id="password" name="password" required>

        `
    }
    else if(val=='Guest'){
        userDetails.innerHTML=`
        <label for="email">Enter your email</label>
        <input type="email"  id="email" placeholder="email" name="email"
        aria-describedby="email" required>`;
    }
})