
       //edit staff_details by id
       function Deleted(id) {
              var r = confirm("Are sure you want to delete Announcement..!");
              if (r==true) {
                     $('#form_delete_'+id).submit();
              }
              
       }

       