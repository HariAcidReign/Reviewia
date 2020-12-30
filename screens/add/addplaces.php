<?php
session_start();
?>
 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <title>Add Places</title> 
  </head>
  <body class="bg-red-200 items-center">
    <div class="flex p-1 py-20 bg-red-100 place-content-center shadow-lg">
      <div class="max-w-lg overflow-hidden border border-gray-200 rounded-lg">
        <div class="flex items-center justify-center">
          <span class="text-xl font-medium text-gray-900">Add Places</span><br><br>
        </div>
        <form name="add_name" id="add_name">  
                          <div class="table-responsive">  
                               <table class="table table-bordered" id="dynamic_field">  
                                    <tr>  
                                         <td><input type="text" name="name[]" placeholder="Enter place"  /></td>  
                                         <td><button type="button" name="add" id="add" class="bg-green-500 text-white active:bg-teal-600 font-bold uppercase text-xs ml-5 px-4 py-2 rounded shadow hover:bg-green-700 outline-none focus:outline-none transition-all duration-150 ease">Add More Places</button></td>  
                                    </tr>  
                               </table><br>  
                                <input type="button" name="submit" id="submit" class="w-full px-4 py-2 text-sm text-center text-white bg-indigo-600 rounded-md hover:bg-indigo-500" value="Create this Package" />
                                 
                          </div>  
                     </form>
                     <div class="align-center">
                      <br>
              <a
                class="block text-sm text-indigo-900  fontme hover:underline"
                href="addpackage.php"
                >Go back</a
              >
          </div>
      </div>
    </div>
  </body>
</html>  
 <script>  
 $(document).ready(function(){  
      var i=1;
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Enter place" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="bg-red-500 text-white active:bg-teal-600 font-bold uppercase text-xs ml-5 px-4 py-2 rounded shadow hover:bg-red-700 outline-none focus:outline-none transition-all duration-150 ease btn_remove">Remove Place</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
      $('#submit').click(function(){            
           $.ajax({  
                url:"name.php",  
                method:"POST",  
                data:$('#add_name').serialize(),
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name')[0].reset();  
                }  
           });  
      });  
 });  
 </script>

