$(document).ready(function(){

      $('#contact-us').validate({
        
        rules:{
            email:{
                required:true,
                email:true
            },
            bio:{
                required:true,
            }
        },
        messages:{
            email:{
                required:'<div style="color:red;">Please enter an email address</div>',
                email:'<div style="color:red;">Please enter valid email address</div>'
            },
            bio:{
                required:'<div style="color:red;">Please enter your message</div>'
            }
        }
      });  
      
      

});