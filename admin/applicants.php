<div>
    <center><h1> Positions Available </h1></center>
</div>
<div>
    <input type="text" style="width:100%;border:1.5px solid #ddd;background-image: url('../images/searchicon.png');background-position:10px 10px;background-size: 20px 20px;background-repeat:no-repeat;font-size: 16px;padding: 10px 20px 12px 40px;" id="myInput" onkeyup="myFunction()" placeholder="Search Applicants by Job ID, Location or Keywords " title="Type in a name">
    <table class = "table" id="myTable">
        <thead>
            <tr>
                <td><center><strong>Application ID</strong></center></td>
                <td><strong>Applicant Name</strong></td>
                <td><center><strong>Contact Number</strong></center></td>
                <td><center><strong>Submitted On</strong></center></td>
                <td><center><strong>Job ID</strong></center></td>
                <td><strong>Job Title</strong></td>
                <td><center><strong>Experience</strong></center></td>
            </tr>
        </thead>
    <tbody>
    <?php
        include_once("dbconnection.php");
        //$query="SELECT users.email, users.password, data.data_1, data.data_2 FROM users INNER JOIN data ON users.user_id=data.user_id";
        $query="SELECT jobapplications.applicationId, jobapplications.name,jobapplications.submissionDate, jobapplications.contact, jobapplications.experience, jobs.title, jobs.jobId FROM jobapplications INNER JOIN jobs ON jobapplications.fkJobId=jobs.jobId ORDER BY jobapplications.submissionDate DESC";
        $results = mysqli_query($bd,$query);
        $a = 0;    
        while($row = mysqli_fetch_assoc($results)) 
        {
            $a++;
            echo '<script type = "text/javascript">c++;</script>'
        ?>
        <tr>    
            <td><center><?php print '<center><a href="applications.php?applicationId='.$row['applicationId'].'">'.$row['applicationId'].'</a></center>';?></center></td>
            <td><b><?php echo $row['name']?></b></td>
            <td><center><?php echo $row['contact']?></center></td>
            <td><center><?php echo date("M j, Y ", strtotime($row['submissionDate']))?></center></td>
            <td><center><?php echo $row['jobId']?></center></td>
            <td style="word-wrap: break-word;max-width:160px;"><b><?php echo $row['title']?></b></td>
            <td style="word-wrap: break-word;max-width:220px;"><center><?php echo $row['experience']?></center></td>
        </tr>
    <?php
    }
    ?>
    </tbody>
    </table
</div>
<script>
    function myFunction() {
        var input, filter, table, tr, td, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            td1 = tr[i].getElementsByTagName("td")[1];
            td2 = tr[i].getElementsByTagName("td")[2];
            td3 = tr[i].getElementsByTagName("td")[3];
            td5 = tr[i].getElementsByTagName("td")[5];
            td6 = tr[i].getElementsByTagName("td")[6];
            if ((td)||(td1)||(td2)||(td3)||(td4)||(td5)||(td6)) {
            if ((td.innerHTML.toUpperCase().indexOf(filter) > -1)||(td1.innerHTML.toUpperCase().indexOf(filter) > -1)||(td2.innerHTML.toUpperCase().indexOf(filter) > -1)||(td3.innerHTML.toUpperCase().indexOf(filter) > -1)||(td5.innerHTML.toUpperCase().indexOf(filter) > -1)||(td6.innerHTML.toUpperCase().indexOf(filter) > -1)) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
            }       
        }
    }
</script>
