const myForm= document.getElementById("contactForm")
myForm.addEventListener('submit',function(e){
    e.preventDefault() //prevent the page form reloading or navigating when submit the form 
    const formData =new FormData(this)// collection of key value pairs of the form it self, store data inside formData object 
   // set the content of the request to the top 
    fetch('http://localhost/assignment/startbootstrap-freelancer-gh-pages/contact-retrieve-data/send.php', {
        method: 'post',
        body:formData
    })
    .then (function (response){
        return response.text()
        console.log(text)
    })

})

/*


 another way 


const myForm= document.getElementById("contactForm")
const fullname= document.getElementById("name").value
const email = document.getElementById("email").value
const phone = document.getElementById("phone").value
const message = document.getElementById("message").value

myForm.addEventListener('submit',sendData)

function sendData(e){
    e.preventDefault() //prevent the page form reloading or navigating when submit the form 
    var searchparams = new URLSearchParams({"fullname":fullname,"email":email,"phone":phone,"message":message})

    fetch('http://localhost/assignment/startbootstrap-freelancer-gh-pages/contact-retrieve-data/send.php', {
        method: 'POST',
        // body:formData
        body:searchparams
    })
}

*/