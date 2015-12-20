<?php
    include('../connect/prac.php');
    session_start();
    $_SESSION['user']=2;
?>
<html>
<head>    
    <link rel="stylesheet" type="text/css" href="../css/newclass.css">        
    <link rel="stylesheet" type="text/css" href="../css/headr.css">
    <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
    <script src="../js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(MainFunction);
        function MainFunction() {
            $('#btn').click(function (event) {
                if($("#co > * ").length == 0){
                    alert("You Can't add more classes ....")
                }else{
                    ShowDialog();
                }
                //To stop actual/default functionality of the link
                event.preventDefault();
                return false;
            });

            $('#lnkClose').click(function (e) {
                ClearField();
                HideDialog();
                e.preventDefault();
            });

            $('#btnOK').click(function (e) {

               
                ClearField();
                HideDialog();
                
            });

        } //End of MainFunction
        function ClearField() {
            $("#txtName").val('');
            $("#txtName1").val('');
            $("#txtName2").val('');
        }
        function ShowDialog() {
            $('#divoverlay').show();
            $('#modal_dialog').slideDown(600);
        }
        function HideDialog() {
            $('#divoverlay').hide();
            $('#modal_dialog').slideUp(600);
        }
    </script>
    <?php
    if (isset ($_REQUEST['ok'])==true)
    {
        $b = $_SESSION['user'];
        $name1=$_REQUEST['co'];
        $des=$_REQUEST["des"];
        $outline=$_REQUEST["course"];
        $img=$_FILES["img"];
        $file_n = $img["name"];
        if(empty($name1) || empty($des)|| empty($outline) || empty($img) )
        {
                echo "Fill complete form";
        }
        else
        {
            if(empty($file_n) == false){
                $file_n= round(microtime(true)).".jpg";
                move_uploaded_file($_FILES["img"]["tmp_name"], "image//".$file_n);
            }
            $sqla="insert into classes(teacherId,courseId,description,courseOutline,image) values($b,$name1,'$des','$outline','image/$file_n')";
        }
    }
    ?>
</head>
    <body>
        <?php include('../header.php'); ?> 
        <hr style="margin-top:20px;">
        <div id="content">  
            <div id="newclass-main">
                <div id="newclass-Content">
                    <div id="newclass-mainContent"></div>
                    <div class="divhide"></div>
                    <div id="newclass-Content1">
                        <div id="newclass-Content1-b">
                            CLASSROOMS                            
                        </div>
                        <div id="newclass-Content1-a">
                            <input type="button" id="btn" value="Add Class" style="float: right;">
                        </div>
                    </div>
                    <br><br><hr><br>
                    <div id="classroomS-Content2 ">
                        <div style="background-color:lightgray;">
                            <?php
                            $aa = $_SESSION["user"];
                            $sql = "Select c.classId,c1.courseName , c1.credits , c1.courseId,c.image from classes c , courses c1 where c.courseId=c1.courseId  AND c.teacherId='$aa'";
                            $result = mysqli_query($conn,$sql);
                            $record_found=mysqli_num_rows($result); 
                            if($record_found > 0 )
                            {
                                while($row=mysqli_fetch_assoc($result))
                                {
                                    if((empty($row['image']) == true) || (file_exists($row['image']) == false))
                                    {
                                        $row['image'] = 'image/default.jpg';
                                    }
                                    echo    '<div class="class_table">
                                        <div style="display:table-cell;">
                                            <img class="class_img" src="'.$row['image'].'">
                                        </div>
                                        <div style="display:table-cell;vertical-align:middle;padding-left: 60px;">  
                                            <a>
                                                <h2 style="text-align: center;">'.$row['courseName'].'</h2>                                
                                            </a>
                                            <ul>
                                                <li>Course-Code : '.$row['courseId'].'</li>
                                                <li>Credit_Hrs : '.$row['credits'].'</li>
                                                <li>Enrolled-Students : 50</li>
                                            </ul>
                                        <br>
                                        <form method="POST">
                                            <input type="hidden" name="Id" value="'.$row['classId'].'">
                                            <input type="hidden" name="image" value="'.$row['image'].'">
                                            <input type="submit" name="btnDel" id="del" value="Delete">
                                        </form>
                                        </div>
                                    </div>';
                                }
                            }
                            ?>
                            <hr><div id="newclass-Content2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="divoverlay" class="overlay"></div>
        <div id="modal_dialog" class="web_dialog">
            <form method="post" enctype="multipart/form-data">
                <h1 class="dialog_title">Add New Class</h1>
                <div class="content" style="margin-top: 20px;margin-left: 20px;">
                    <p>COURSE NAME:</p>
                    <select id="co" name="co">
                        <?php
                        $aa = $_SESSION["user"];
                        $sql = "Select courseId,courseName  from courses where courseId NOT IN (Select courseId from classes where teacherId=$aa);";
                        $result = mysqli_query($conn,$sql);
                        $record_found=mysqli_num_rows($result); 
                        if($record_found > 0 )
                        {
                            while($row=mysqli_fetch_assoc($result))
                            {
                                echo "<option value =".$row['courseId']."> ".$row['courseName']." </option>";   
                            }
                        }
                        ?>
                    </select><br>
                    <p>Description : </p><input id="txtName" type="text" name="des" /><br>
                    <p>Course Outline: </p><input id="txtName1" type="text" name="course" /><br><br>
                    <input type="file" name="img"><br><br>
                    <input type="submit" value="OK" name="ok">
                    <input type="button" value="Cancel" id="lnkClose" name="cancel">
                </div>
            </form>
        </div>
         <script src="jquery-1.9.1.min.js" ></script>
    <script>
        
        $("document").ready(function(){
             $("#del").each(function(){
                  
                    $(this).click(function(){
                        $(this).closest("div").remove();
                    });
             });
           
            });
          
    </script>
    <?php 
echo"123";
$aa = $_SESSION['user'];
    if(isset ($_REQUEST["btnDel"])==true)
        {
        
            $a= $_REQUEST["Id"];
            $i= "image/".$_REQUEST["image"];
            echo $a;
        if(file_exists($i)){
            unlink($i);
        }
            $sql="delete from classes where classId='$aa'";
            mysqli_query($conn,$sql);
       
        }
    
    
    ?>
    </body>
</html>