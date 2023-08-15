function fetchUsers(){

    fetch("read.php")
    .then(response=>response.json())
    .then(data=>{
        console.log(data);
    })
}




//Event Listener for form submission
document.getElementById("registrationForm").addEventListener("submit",function(e){
e.preventDefault();

var name = document.getElementById("name").value;
var email = document.getElementById("email").value;


fetch("create.php",{
    method: "POST",
    headers:{
        "Content-Type":"Application/json",
    },
    body:JSON.stringify({name:name,email:email}),
})
.then(response=>response.json())
.then(data=>{
    alert(data.message);
    document.getElementById("name").value="";
    document.getElementById("email").value="";

})
.catch(error=>{
    console.error("Error:",error);
})
})
fetchUsers();