
      function calculations()
       {

         if(document.getElementById('ten').value && document.getElementById('twenty').value){
                document.getElementById('total').value= parseInt(document.getElementById('ten').value) + parseInt(document.getElementById('twenty').value);
            if(document.getElementById('total').value >= 12){
                document.getElementById('status').value= "PASS";
            }
            else{
                   document.getElementById('status').value= "FAIL";
            }

         }
      }


      function validate()
      {
      
         if( document.form.er.value == "" || isNaN( document.form.er.value ) ||
         document.form.er.value.length != 12 )
         {
            alert( "Please provide your Enrollment_No 12digit" );
            document.form.er.focus() ;
            return false;
         }
         
         if( document.form.st.value == "" )
         {
            alert( "Please provide StudentName" );
            document.form.st.focus() ;
            return false;
         }
         
        
         
         if( document.form.branch.value == "-1" )
         {
            alert( "Please provide your barnch" );
             document.form.branch.focus() ;
            return false;
         }

          if( document.form.subject.value == "-1" )
         {
            alert( "Please provide your subject" );
             document.form.subject.focus() ;
            return false;
         }

         

         return( true );
      }


function calculations1()
       {
          
         if(document.getElementById('ten2').value && document.getElementById('twenty2').value){
                document.getElementById('total2').value= parseInt(document.getElementById('ten2').value) + parseInt(document.getElementById('twenty2').value);
            if(document.getElementById('total2').value >= 12){
                document.getElementById('status2').value= "PASS";
            }
            else{
                   document.getElementById('status2').value= "FAIL";
            }

         }
      }

      function validate1()
      {
      
         if( document.form2.er2.value == "" || isNaN( document.form2.er2.value ) ||
         document.form2.er2.value.length != 12 )
         {
            alert( "Please provide your Enrollment_No 12digit" );
            document.form2.er2.focus() ;
            return false;
         }
         
         if( document.form2.st2.value == "" )
         {
            alert( "Please provide StudentName" );
            document.form2.st2.focus() ;
            return false;
         }
         
        
         
         if( document.form2.branch2.value == "-1" )
         {
            alert( "Please provide your barnch" );
             document.form2.branch2.focus();
            return false;
         }

          if( document.form2.subject2.value == "-1" )
         {
            alert( "Please provide your subject" );
             document.form2.subject2.focus() ;
            return false;
         }

         if( document.form2.ten2.value == "" )
         {
            alert( "Please provide marks out of 10" );
            document.form2.ten2.focus() ;
            return false;
         }
         
         if( document.form2.twenty2.value == "" )
         {
            alert( "Please provide marks out of 20" );
            document.form2.twenty2.focus() ;
            return false;
         }

         if( document.form2.total2.value == "" )
         {
            alert( "Please provide total" );
            document.form2.total2.focus() ;
            return false;
         }

         if( document.form2.Status2.value == "" )
         {
            alert( "Please provide status" );
            document.form2.status2.focus() ;
            return false;
         }
         

         return( true );
      }

