<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
      tinymce.init({
        selector: '#mytextarea',
  
        plugins: "table",
  menubar: "table",
  toolbar: "table tabledelete | tableprops tablerowprops tablecellprops | tableinsertrowbefore tableinsertrowafter tabledeleterow | tableinsertcolbefore tableinsertcolafter tabledeletecol"
 
      });
    </script>

  </head>

  <body>
  <h1><u>Enter your content</u></h1>
    <form method="post" action="newconnect.php">
      <textarea id="mytextarea" name="uname" placeholder="type here"></textarea>
      <table id="table"></table>
      <p>
    <input type="submit" name="submit" class="btn btn-primary" value="submit">
    </p>
    </form>
   
  </body>
</html>
