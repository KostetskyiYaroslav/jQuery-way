<?php
$fileName = '[NO]';
$fileSize = '[NO]';
$fileDate = '[NO]';

if( isset($_SESSION['file']['fileName']) &&
    isset($_SESSION['file']['fileSize']) &&
    isset($_SESSION['file']['fileDate']) )
{
    $fileName = $_SESSION['file']['fileName'];
    $fileSize = $_SESSION['file']['fileSize'] . ' Kilobyte ';
    $fileDate = $_SESSION['file']['fileDate'];
}
echo <<<UPLOAD
          <form action="architecture/View/components/do_upload1.php" method="post" enctype="multipart/form-data">
           <input hidden="hidden" type="text" name="upload" value="1" />
           <input type="file" name="file" />
           <input type="submit" value="Upload" class="btn waves-effect waves-light light-blue" />
          </form>
          <form action="architecture/View/components/do_upload1.php" method="post" enctype="multipart/form-data">
           Select image to upload:
           <input type="file" name="fileToUpload" id="fileToUpload">
           <input type="submit" value="Upload Image" name="submit">
          </form>
          <table>
           <thead>
            <tr>
             <th data-field="name">File Name</th>
             <th data-field="size">File Size</th>
             <th data-field="date">Date upload</th>
            </tr>
           </thead>
           <tbody>
            <tr>
             <td>
              $fileName
             </td>
             <td>
              $fileSize
             </td>
             <td>
              $fileDate
             </td>
            </tr>
           </tbody>
          </table>\n
UPLOAD;
