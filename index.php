<?php 
    session_start();

    if(!isset($_SESSION['token'])){
header("location: login.html");
}

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <link href="style.css" rel="stylesheet" id="bootstrap-css">
       <script src="js/jquerymin.js"></script>
      <script src="js/bootstrap.min.js"></script>
      
       <script type="text/javascript" src="js/jquery.serializejson.min.js"></script>
      <!------ Include the above in your HEAD tag ---------->
      <div class="container register">
         <div class="row">
            <div class="col-md-3 register-left">
               <img src="src/logo.jpg" alt=""/>
               <h3>Welcome</h3>
               <p>Joseph Vaz College - Student Registration!</p>
                            <button id="checkUser" type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal">
  Check Student
</button>
                            <button id="updateUser" type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicUpdateeModal">
  Update Student
</button>
                <input type="submit" class="btnRegister"  value="Update Student"/>

            </div>
            <div class="col-md-9 register-right">
               <form id="studentreg" data-toggle="validator" role="form">
                  <div class="tab-content" id="myTabContent">
                     <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                         <div class="notify_panel2"></div>
                        <h3 class="register-heading">Student Registration</h3>
                        <div class="row register-form">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input name="indexNo"type="number" class="form-control" placeholder="Index No *" value=""  >
                              </div>
                              <div class="form-group">
                                 <input  name ="initials" type="text" class="form-control" placeholder="Initials *" value="" />
                              </div>
                              <div class="form-group">
                                 <input name="lastName" type="text" class="form-control" placeholder="Last Name *" value="" >
                              </div>
                              <div class="form-group">
                                 <input name="fullName" type="text" class="form-control" placeholder="Full Name *" value="" >
                              </div>
                              <div class="form-group">
                                 <label for="dob">DOB</label>
                                 <input name="DOB" id="dob "type="date" class="form-control"  value="" >
                              </div>
                              <div class="form-group">
                                 <input name="address" type="text" class="form-control" placeholder="Adress *" value="" />
                              </div>
                              <div class="form-group">
                                 <div class="maxl">
                                    <label class="radio inline"> 
                                    <input type="radio" name="gender" value="male" checked>
                                    <span> Male </span> 
                                    </label>
                                    <label class="radio inline"> 
                                    <input type="radio" name="gender" value="female">
                                    <span>Female </span> 
                                    </label>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="row">
                                 <div class="col-md-4">
                                    <select name="grade" class="form-control" required>
                                       <option value="" class="hidden"  selected disabled> Grade</option>
                                       <option value="Advertise">1</option>
                                       <option value="Partnership">2</option>
                                       <option value="General Question">3</option>
                                       <option value="Advertise">4</option>
                                       <option value="Partnership">5</option>
                                       <option value="General Question">6</option>
                                       <option value="Advertise">7</option>
                                       <option value="Partnership">8</option>
                                       <option value="General Question">9</option>
                                       <option value="Advertise">10</option>
                                       <option value="Partnership">11</option>
                                       <option value="General Question">12</option>
                                       <option value="General Question">13</option>
                                    </select>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <input name ="section" type="text" class="form-control" placeholder="Section" value="" required>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <select name="medium" class="form-control">
                                       <option class="hidden"  selected disabled> Medium</option>
                                       <option value="Advertise">Sinhala</option>
                                       <option value="Partnership">English</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <input type="text" minlength="10" maxlength="10" name="homeTel" class="form-control" placeholder="Home Tel *" value="" />
                              </div>
                              <div class="form-group">
                                 <input name="guardianName" type="text" class="form-control" placeholder="Guardian Name" value="" required>
                              </div>
                              <div class="form-group">
                                 <input name ="guardianAddress" type="text" class="form-control" placeholder="Guardian Adress" value="" required>
                              </div>
                              <div class="form-group">
                                 <input name ="guardianRelationship" type="text" class="form-control" placeholder="Guardian Relationship" value="" required>
                              </div>
                              <div class="form-group">
                                 <input name="guardianContact" type="text" class="form-control" placeholder="Guardian Contact" value="" required>
                              </div>
                              <div class="form-group">
                                 <input type="text" class="form-control" placeholder="Enter Your Answer *" value="" />
                              </div>
                              <input type="submit" class="btnRegister"  value="Register"/>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h3  class="register-heading">Apply as a Hirer</h3>
                        <div class="row register-form">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input type="text" class="form-control" placeholder="First Name *" value="" />
                              </div>
                              <div class="form-group">
                                 <input type="text" class="form-control" placeholder="Last Name *" value="" />
                              </div>
                              <div class="form-group">
                                 <input type="email" class="form-control" placeholder="Email *" value="" />
                              </div>
                              <div class="form-group">
                                 <input type="text" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" value="" />
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input type="password" class="form-control" placeholder="Password *" value="" />
                              </div>
                              <div class="form-group">
                                 <input type="password" class="form-control" placeholder="Confirm Password *" value="" />
                              </div>
                              <div class="form-group">
                                 <select class="form-control">
                                    <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                    <option>What is your Birthdate?</option>
                                    <option>What is Your old Phone Number</option>
                                    <option>What is your Pet Name?</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <input type="text" class="form-control" placeholder="`Answer *" value="" />
                              </div>
                              <input type="submit" class="btnRegister"  value="Register"/>
                           </div>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
                       <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <div class="notify_panel"></div>
        <h5 class="modal-title" id="exampleModalLabel">Enter Student Index Number</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form id="studentreg" data-toggle="validator" role="form">
      <div class="modal-body">
            
        <div class="form-group">
                                 <input id="checkIndexNumber" name ="checkIndexNumber" type="text" class="form-control" placeholder="Index Number" value="" required>
                              </div>
         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button id="tag-form-submit" type="button" class="btn btn-primary">Enter</button>
      </div>
             </form>
    </div>
  </div>
</div>
       
       
                              <div class="modal fade" id="basicUpdateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <div class="notify_panel"></div>
        <h5 class="modal-title" id="exampleModalLabel">Update Student</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form id="studentreg" data-toggle="validator" role="form">
      <div class="modal-body">
            
                       
                  <div class="tab-content" id="myTabContent">
                     <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  
                        <div class="row register-form">
                             
                                 <div class="col-md-12">
                              <div class="form-group">
                                 <input name="indexNo"type="number" class="form-control" placeholder="Index No *" value=""  >
                              </div>
                                     </div>
                               <br >
                           <div class="col-md-6">
                              
                               
                              <div class="form-group">
                                 <input  name ="initials" type="text" class="form-control" placeholder="Initials *" value="" />
                              </div>
                              <div class="form-group">
                                 <input name="lastName" type="text" class="form-control" placeholder="Last Name *" value="" >
                              </div>
                              <div class="form-group">
                                 <input name="fullName" type="text" class="form-control" placeholder="Full Name *" value="" >
                              </div>
                              <div class="form-group">
                                 <label for="dob">DOB</label>
                                 <input name="DOB" id="dob "type="date" class="form-control"  value="" >
                              </div>
                              <div class="form-group">
                                 <input name="address" type="text" class="form-control" placeholder="Adress *" value="" />
                              </div>
                              <div class="form-group">
                                 <div class="maxl">
                                    <label class="radio inline"> 
                                    <input type="radio" name="gender" value="male" checked>
                                    <span> Male </span> 
                                    </label>
                                    <label class="radio inline"> 
                                    <input type="radio" name="gender" value="female">
                                    <span>Female </span> 
                                    </label>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="row">
                                 <div class="col-md-4">
                                    <select name="grade" class="form-control" required>
                                       <option value="" class="hidden"  selected disabled> Grade</option>
                                       <option value="Advertise">1</option>
                                       <option value="Partnership">2</option>
                                       <option value="General Question">3</option>
                                       <option value="Advertise">4</option>
                                       <option value="Partnership">5</option>
                                       <option value="General Question">6</option>
                                       <option value="Advertise">7</option>
                                       <option value="Partnership">8</option>
                                       <option value="General Question">9</option>
                                       <option value="Advertise">10</option>
                                       <option value="Partnership">11</option>
                                       <option value="General Question">12</option>
                                       <option value="General Question">13</option>
                                    </select>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <input name ="section" type="text" class="form-control" placeholder="Section" value="" required>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <select name="medium" class="form-control">
                                       <option class="hidden"  selected disabled> Medium</option>
                                       <option value="Advertise">Sinhala</option>
                                       <option value="Partnership">English</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <input type="text" minlength="10" maxlength="10" name="homeTel" class="form-control" placeholder="Home Tel *" value="" />
                              </div>
                              <div class="form-group">
                                 <input name="guardianName" type="text" class="form-control" placeholder="Guardian Name" value="" required>
                              </div>
                              <div class="form-group">
                                 <input name ="guardianAddress" type="text" class="form-control" placeholder="Guardian Adress" value="" required>
                              </div>
                              <div class="form-group">
                                 <input name ="guardianRelationship" type="text" class="form-control" placeholder="Guardian Relationship" value="" required>
                              </div>
                              <div class="form-group">
                                 <input name="guardianContact" type="text" class="form-control" placeholder="Guardian Contact" value="" required>
                              </div>
                              <div class="form-group">
                                 <input type="text" class="form-control" placeholder="Enter Your Answer *" value="" />
                              </div>
                              <input type="submit" class="btnRegister"  value="Register"/>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h3  class="register-heading">Apply as a Hirer</h3>
                        <div class="row register-form">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input type="text" class="form-control" placeholder="First Name *" value="" />
                              </div>
                              <div class="form-group">
                                 <input type="text" class="form-control" placeholder="Last Name *" value="" />
                              </div>
                              <div class="form-group">
                                 <input type="email" class="form-control" placeholder="Email *" value="" />
                              </div>
                              <div class="form-group">
                                 <input type="text" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" value="" />
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input type="password" class="form-control" placeholder="Password *" value="" />
                              </div>
                              <div class="form-group">
                                 <input type="password" class="form-control" placeholder="Confirm Password *" value="" />
                              </div>
                              <div class="form-group">
                                 <select class="form-control">
                                    <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                    <option>What is your Birthdate?</option>
                                    <option>What is Your old Phone Number</option>
                                    <option>What is your Pet Name?</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <input type="text" class="form-control" placeholder="`Answer *" value="" />
                              </div>
                             
                           </div>
                        </div>
                     </div>
                  </div>
         
         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button id="tag-form-submit" type="button" class="btn btn-primary">Enter</button>
      </div>
             </form>
    </div>
  </div>
</div>
      <script>
           /* stop form from submitting normally */
          
         $("#studentreg").submit(function(event) {
              event.preventDefault();
             
                        $.fn.serializeObject = function() {
               var o = {};
               var a = this.serializeArray();
               $.each(a, function() {
                  if (o[this.name] !== undefined) {
                        if (!o[this.name].push) {
                           o[this.name] = [o[this.name]];
                        }
                        o[this.name].push(this.value || '');
                  } else {
                        o[this.name] = this.value || '';
                  }
               });
               return o;
            };
            var data = JSON.stringify($('#studentreg').serializeObject());
            console.log("data: "+data)
         


              $.ajax({
               type: "POST",
               url: "http://ec2-3-88-20-111.compute-1.amazonaws.com/public/students",
               data: data,
               dataType: 'json',
               contentType: 'application/json;charset=UTF-8',
               success: function(response) {
                   if(response.indexNo != null) {
                $(".notify_panel2").notify("User Added","success");
            }
                  console.log("Success: ",msg)
                 
               },
               error: function(err) {
                  console.log("Error: ",err)
                  alert(err);
               },
            });
         });
         
         
       
          $('#checkUser').click(function () {
	$('#basicExampleModal').modal({show : true});
});
          $('#updateUser').click(function () {
	$('#basicUpdateModal').modal({show : true});
});
          $('#tag-form-submit').on('click', function(e) {
             var cindex= $( "#checkIndexNumber" ).val();
    e.preventDefault();
    $.ajax({
        type: "GET",
        url: "http://ec2-3-88-20-111.compute-1.amazonaws.com/public/students/"+cindex,
        data: { 
        
    },
        
        success: function(response) {
            console.log(response)
            if(response.indexNo != null) {
                $(".notify_panel").notify("User Exists","success");
            }
            else{
                $(".notify_panel").notify("User does not Exists","warning");
            }
        },
        error: function(err) {
             $(".notify_panel").notify("User does not Exists","warning");
        }
    });
    return false;
});
         
      </script>
       <script src="js/notify.js"></script>
   </head>
</html>