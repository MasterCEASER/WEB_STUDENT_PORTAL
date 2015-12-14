<?php
    include ('head.php');
    include ('../header.php');
    include ('classbodyhead.php');
?>
    <div class="sub_child_content sub_main_content" style="max-width:20px;">
        <h3>Description</h3><p>
<?php
        $u = $_SESSION['user'];
        $c = $_SESSION['course'];
        $sql = 'select c.description,t.courseOutline from student s,courses c,teacher t where c.courseId = s.courseId and studentId = '.$u.' and s.courseId = '.$c.' and (s.courseId,s.teacherId) = (t.courseId,t.teacherId);';
        $res = $db->query($sql);
        $row = $res->fetch(PDO::FETCH_NUM);
        echo $row[0];
        echo '</p><hr><h3>Course Outline</h3><p>';
        echo $row[1];
    ?>
        
                        </p></div>
        <?php
        include ('foot.php');
?>