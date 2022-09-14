const myForm= document.getElementById("contactForm")
myForm.addEventListener('submit',function(e){
    e.preventDefault() //prevent the page form reloading or navigating when submit the form 
    const formData =new FormData(this)// collection of key value pairs of the form it self, store data inside formData object 
   // set the content of the request to the top 
    fetch('send.php', {
        method: 'post',
        body:formData
    })
    .then (function (response){
        return response.text()
        console.log(text)
    })

})