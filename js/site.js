$(document).ready(function(){
   var file = $('#files');
   var refresh_files = function(){
      var a = null;
      $.ajax({
         url: 'files/',
         async: false,
         type: 'GET',
         dataType: 'html',
         success: function (html){
            a = html;
         }
      });
      file.html(a);
   };
   $('#upload_file').submit(function(e) {
      e.preventDefault();
      var title = $('#title');
      $.ajaxFileUpload({
         url         :'upload_file/',
         secureuri      :true,
         fileElementId  :'userfile',
         dataType    : 'json',
         data        : {
            title: title.val()
         },
         success  : function (data)
         {
            if(data.status === 'success')
            {
               file.html('<p>Reloading files...</p>');
               refresh_files();
               title.val('');
            };
            alert(data.msg);
         }
      });
   });

   $('.delete_file_link').live('click', function(e) {
      e.preventDefault();
      if (confirm('Are you sure you want to delete this file?')) {
         var link = $(this);
         $.ajax({
            url         : 'delete_file/' + link.data('file_id'),
            dataType : 'json',
            success     : function (data){
               files = $('#files');
               if (data.status === "success"){
                  link.parents('li').fadeOut('fast', function() {
                     $(this).remove();
                     if (files.find('li').length == 0){
                        files.html('<p>No Files Uploaded</p>');
                     }
                  });
               }
               else{
                  alert(data.msg);
               }
            }
         });
      }
   });

});