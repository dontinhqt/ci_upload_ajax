<!doctype html>
<html>
<head>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
   <script src="<?php echo base_url()?>js/ajaxfileupload.js"></script>
   <script src="<?php echo base_url()?>js/site.js"></script>
   <link href="<?php echo base_url()?>css/style.css" rel="stylesheet" />
   <style type="text/css" media="screen">
#modal_first {
    position: fixed;
    bottom: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
    opacity: .6;
    background-color: #000;
    z-index: 2
}
#modal_last header {
    background-color: #F6F7F8;
    padding: 4px 8px 3px;
    font-weight: 700;
    border-bottom: 1px solid #ddd
}
#modal_last section {
    padding: 6px 8px
}
#modal_last footer {
    position: relative;
    padding: 5px 8px 7px
}
#modal_last footer>span {
    height: 1px;
    background-color: #ddd;
    position: absolute;
    left: 8px;
    right: 8px;
    top: -.3px
}
#modal_last footer button:not(:last-child) {
    margin-left: 7px
}
#modal_last footer button {
    font-size: 14px;
    font-weight: 700;
    float: right
}
#modal_last footer .btn {
    border-radius: 1px;
    border: 1px solid #CCC;
    outline: none;
    padding: 3px 8px
}
#modal_last {
    z-index: 3;
    position: absolute;
    top: 100px;
    background-color: #FFF;
    margin: 0px 10px;
    border-radius: 4px!important;
    font-size: 17.2px
}
   </style>
</head>
<body>
   <h1>Upload File</h1>
   <form method="post" action="" id="upload_file" enctype="multipart/form-data">
      <label for="title">Title</label>
      <input type="text" name="title" id="title" value="" />
 
      <label for="userfile">File</label>
      <input type="file" name="userfile" id="userfile" size="20" />
 
      <input type="submit" name="submit" id="submit" />
   </form>
   <h2>Files</h2>
   <div id="files"></div>
</body>
</html>