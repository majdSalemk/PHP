
const inputs = document.querySelectorAll('.input') ;

function focusFunc() {
 let parent = this.parentNode.parentNode;
 parent.classList.add('focus') ;
}
function  blurFunc() {
 let parent = this.parentNode.parentNode;
 if(this.value == "") {
    parent.classList.remove('focus') ;

 }
}
inputs.forEach(input => {
    input.addEventListener('focus' , focusFunc ) ;
    input.addEventListener('blur' , blurFunc ) ;
} )



document.addEventListener('DOMContentLoaded', function (e) {
    e.preventDefault();
    const submitBtn = document.getElementById('Login-btn');
    const erroremail = document.getElementById('erroremail');

    submitBtn.addEventListener('click', async function (e) {
        e.preventDefault();
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;
        // const password = document.getElementById('password').value;
        // const password = document.getElementById('password').value;




        erroremail.textContent = '';
        const response = await fetch(`login.php?email=${email}&password=${password}`);
        const responseData = await response.text(); // Read the response as text
        console.log(responseData);

        try {


            const data = JSON.parse(responseData); // Parse the JSON response
            console.log(data.data);

            if (data.data) {
                const email = data.data[0].email;
                const firstname = data.data[0].firstname;
                const isadmin = data.data[0].isadmin;
                const middlename = data.data[0].middlename;
                const lastname = data.data[0].lastname;
                const familyname = data.data[0].familyname;
                const phonenumber = data.data[0].phonenumber;
                const dateofbirth = data.data[0].dateofbirth;
                const datecreated = data.data[0].datecreated;

                console.log(isadmin);
                 // Get the email from the response

                localStorage.setItem('firstname', firstname);
                localStorage.setItem('middlename', middlename);
                localStorage.setItem('lastname', lastname);
                localStorage.setItem('familyname', familyname);
                localStorage.setItem('email', email);
                localStorage.setItem('phonenumber', phonenumber);
                localStorage.setItem('dateofbirth', dateofbirth);
                localStorage.setItem('datecreated', datecreated);




                // Redirect to another page
                if(isadmin==1){
                window.location.href = 'data.html';
            }
                else{
                    window.location.href = 'welcomepage.html';
                }
            } else {
                console.log('nb');
                // Invalid email or password
                erroremail.textContent = "Invalid email or password";
            }
        } catch (error) {
            console.error('Error fetching data:', error);
        }
    });
});