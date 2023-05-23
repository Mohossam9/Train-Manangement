(function ($) {
    "use strict";

    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 40) {
            $('.navbar').addClass('sticky-top');
        } else {
            $('.navbar').removeClass('sticky-top');
        }
    });
    
    // Dropdown on mouse hover
    $(document).ready(function () {
        function toggleNavbarMethod() {
            if ($(window).width() > 992) {
                $('.navbar .dropdown').on('mouseover', function () {
                    $('.dropdown-toggle', this).trigger('click');
                }).on('mouseout', function () {
                    $('.dropdown-toggle', this).trigger('click').blur();
                });
            } else {
                $('.navbar .dropdown').off('mouseover').off('mouseout');
            }
        }
        toggleNavbarMethod();
        $(window).resize(toggleNavbarMethod);
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        items: 1,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
    });
    function addtrip()
     {
     var date = document.getElementById("date").value;
     var Departure = document.getElementById("Departure").value;
     var destination = document.getElementById("destination").value;
     var time = document.getElementById("time").value;
    if(date=="" || Departure=="" || destination=="" || time==""){
        window.alert("Please Fill the Missing Data");
        return false;
    }
    else if(Departure == destination){
        window.alert("Depature and Destination Cannot has the same name");
    }
    else
{
    window.alert("A new trip has been added successfully");
     

}
      
     }
     var el = document.getElementById('addtrip');
     if(el){
           el.addEventListener('submit', addtrip, false);
            }

            function Updatetrip()
            {
            var date = document.getElementById("date").value;
            var Departure = document.getElementById("Departure").value;
            var destination = document.getElementById("destination").value;
            var time = document.getElementById("time").value;
           if(date=="" || Departure=="" || destination=="" || time==""){
               window.alert("Please Fill the Missing Data");
               return false;
           }
           else if(Departure == destination){
               window.alert("Depature and Destination Cannot has the same name");
           }
           else
       {
           window.alert("The Trip has been Updated successfully");
            
       
       }
             
            }
            var el = document.getElementById('updateform');
            if(el){
                  el.addEventListener('submit', Updatetrip, false);
                   }
    


     function deletetrip()
     {
     var date = document.getElementById("date").value;
     var Departure = document.getElementById("departure").value;
     var destination = document.getElementById("destination").value;
     var time = document.getElementById("time").value;
    if(date=="" || Departure=="" || destination=="" || time==""){
        window.alert("Please Fill the Missing Data");
        return false;
    }
    else if(Departure == destination){
        window.alert("Depature and Destination Cannot has the same name");
    }
    else
   {
    window.alert("The Trip has been Deleted successfully");
     

      }
      
     }
     var el = document.getElementById('deleteform');
     if(el){
           el.addEventListener('submit', deletetrip, false);
            }



            function BookTicket()
            {
            var date = document.getElementById("date").value;
            var Departure = document.getElementById("Departure").value;
            var destination = document.getElementById("Destination").value;
            var time = document.getElementById("time").value;
            var class1 = document.getElementById("class").value;
            var email = document.getElementById("email").value;
            var contact = document.getElementById("contact").value;
            var cardnumber = document.getElementById("cardnumber").value;
            var securitycode = document.getElementById("securitycode").value;
            var expirationdate = document.getElementById("expirationdate").value;
            var FirstName = document.getElementById("FirstName").value;
            var LastName = document.getElementById("LastName").value;
            var EmailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
            var regName = /^[a-zA-Z]+ [a-zA-Z]+$/;
           
           if(date=="" || Departure=="" || destination=="" || time==""||cardnumber==""||securitycode==""||expirationdate=="" ||class1==""|| email==""|| contact ==""||FirstName==""||LastName=="" ){
               window.alert("Please Fill the Missing Data");
               return false;
           }
           else if(Departure == destination){
               window.alert("Depature and Destination Cannot has the same name");
               
           }
           else if(isNaN(cardnumber)){
            window.alert("invalid card number");
        }  else if(isNaN(contact)){
            window.alert("invalid contact number");
        }
        else if(!email.match(EmailRegex)){
            window.alert("invalid Email");
            
        }
        else if(!FirstName.match(regName)){
            window.alert("Enter Valid Name");
            
        }
        else if(!LastName.match(regName)){
            window.alert("Enter Valid Name");
            
        }
          
          
           else
          {
           window.alert("your ticket has been successfully reservate");
            
       
             }
             
            }
            var el = document.getElementById('Reservation');
            if(el){
                  el.addEventListener('submit', BookTicket, false);
                   }
    
                   function signup()
                   {
                   var email = document.getElementById("email1").value;
                   var EmailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
                  if(email==""){
                      window.alert("Please write your email");
                      return false;
                  }
                  else if(email.match(EmailRegex))
                 {
                    window.alert("you signed up succussfully");

                 }
                  else
                 {
                  window.alert("Enter Valid email")
                   
              
                    }
                    
                   }
                   var el = document.getElementById('signup');
                   if(el){
                         el.addEventListener('submit', signup, false);
                          }
              
                          function addsuggestions()
                          {
                          var name = document.getElementById("name").value;
                          var email = document.getElementById("email").value;
                          var subject = document.getElementById("subject").value;
                          var Message = document.getElementById("Message").value;
                          var EmailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
                           var regName = /^[a-zA-Z]+ [a-zA-Z]+$/;
                         if(name=="" || email=="" || subject=="" || Message==""){
                             window.alert("Please Fill the Missing Data");
                             return false;
                         }
                         else if(!email.match(EmailRegex)){
                             window.alert("Invaid Email");
                         }
                        
                         else
                     {
                         window.alert("your message has been sent successfully");
                          
                     
                     }
                           
                          }
                          var el = document.getElementById('suggusetions');
                          if(el){
                                el.addEventListener('submit', addsuggestions, false);
                                 }
                  
              


    
    
})(jQuery);

