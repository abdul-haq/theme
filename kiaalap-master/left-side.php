<?php 
$idd=$_SESSION['user_role_id'];
?>
<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
            <strong><a href="index.html"><img class="logo-samll" src="img/logo/logosn.png" alt="" /></a></strong>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li class="active">
                        <a href="index.php">
                               <span class="educate-icon educate-home icon-wrap"></span>
                               <span class="mini-click-non">Dashboard</span>
                            </a>
                      
                    </li>
                    <?php
		if($idd != 3){
            ?>
            
                    <li>
                        <a class="has-arrow" href="all-professors.html" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Faculty</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                       
                            <li><a title="All Professors" href="../../kiaalap-master/Professor/all-professors.php"><span class="mini-sub-pro">All Faculties</span></a></li>
                            <?php
                            if($idd==1){?>
                            <li><a title="Add Professor" href="add-professor.html"><span class="mini-sub-pro">Add Faculty</span></a></li>
                            <li><a title="Edit Professor" href="edit-professor.html"><span class="mini-sub-pro">Edit Faculty</span></a></li>
                            <?php } ?>
                            <li><a title="Professor Profile" href="professor-profile.html"><span class="mini-sub-pro">Faculty Profile</span></a></li>
                           
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Students</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All Students" href="all-students.html"><span class="mini-sub-pro">All Students</span></a></li>
                        
                            <li><a title="Students Profile" href="student-profile.html"><span class="mini-sub-pro">Student Profile</span></a></li>
                        </ul>
                    </li>
                   
                    <li>
                        <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-department icon-wrap"></span> <span class="mini-click-non">Departments</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Departments List" href="departments.html"><span class="mini-sub-pro">Departments List</span></a></li>
                            <?php
                            if($idd==1){?>
                            <li><a title="Add Departments" href="add-department.html"><span class="mini-sub-pro">Add Departments</span></a></li>
                            <li><a title="Edit Departments" href="edit-department.html"><span class="mini-sub-pro">Edit Departments</span></a></li>
                            <?php } ?>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="all-professors.html" aria-expanded="false"><span class="educate-icon educate-project icon-wrap"></span> <span class="mini-click-non">Batch</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All Professors" href="all-professors.html"><span class="mini-sub-pro">2019</span></a></li>
                            <li><a title="Add Professor" href="add-professor.html"><span class="mini-sub-pro">2018</span></a></li>
                            <li><a title="Edit Professor" href="edit-professor.html"><span class="mini-sub-pro">2017</span></a></li>
                            <li><a title="Professor Profile" href="professor-profile.html"><span class="mini-sub-pro">2016</span></a></li>
                        </ul>
                    </li>
        <?php } ?>
        <?php
        
		if($idd==3||$idd==1||$idd==2){
            ?>
                    <li>
                        <a class="has-arrow" href="all-professors.html" aria-expanded="false"><span class="educate-icon educate-project icon-wrap"></span> <span class="mini-click-non">Proposal</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All Professors" href="all-professors.html"><span class="mini-sub-pro">View Proposal</span></a></li>
                            <?php
                            if($idd==3){?>
                            <li><a title="Add Professor" href="add-professor.html"><span class="mini-sub-pro">Add Proposal</span></a></li>
                            <?php } ?>
                        </ul>
                    </li>
                    <?php } ?>
                    <li>
                        <a class="has-arrow" href="all-professors.html" aria-expanded="false"><span class="educate-icon educate-project icon-wrap"></span> <span class="mini-click-non">Settings</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All Professors" href="all-professors.html"><span class="mini-sub-pro">Profile</span></a></li>
                            
    
                        </ul>
                    </li>
                
                   
                  
                  
                </ul>
            </nav>
        </div>
    </nav>
</div>