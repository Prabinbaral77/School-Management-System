<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
    <style>
    *{
        font-weight:bold;
    }
    .heading{
        color:blue;
        text-align:center;
        margin-bottom:10px; 
    }
    .sub-heading{
        text-align:center;
        margin-bottom:15px;
        text-decoration:underline;
    }
    .date-container{
        align-items:center;
        text-align:center;
        margin-bottom:25px;
    }
    .date-container label{
        text-align:center;
        margin: 0 10px;
    }
    
    </style>
</head>
<body>
        @php
            use App\Models\Library;
            use App\Models\Student;
            use App\Models\Grade;

            function bookName($id) {
                $bookName = Library::where(['id' => $id])->pluck('bookname');
                $bookName = trim($bookName, '[""]');
                return $bookName;
            }

            function studentName($id){
                $studentname = Student::where(['id' => $id])->pluck('full_name');
                $studentname = trim($studentname, '[""]');
                return $studentname;
            }

            function studentGrade($id){
                $grade_id = Student::where(['id' => $id])->pluck('grade_id');
                $grade_name = Grade::where('id', $grade_id )->pluck('name');
                $grade_name = trim($grade_name, '[""]');
                return $grade_name;
            }

            function studentRoll($id){
                $studentroll = Student::where(['id' => $id])->pluck('roll_no');
                $studentroll = trim($studentroll, '[""]');
                return $studentroll;
            }

            function studentNumber($id){
                $studentnumber = Student::where(['id' => $id])->pluck('phone_number');
                $studentnumber = trim($studentnumber, '[""]');
                return $studentnumber;
            }
        @endphp
    <div class="container">
            <h1 class="heading">Shree Bhadrakali Higher Secondary school</h1>
            <h2 class="sub-heading">Report on Borrow Book</h2>
                <div class="date-container">
                    <label for="date">@php  echo "Today is " . date("Y/m/d") . ".";   @endphp</label>
                </div>

                <h2>Prabin Dailly Attendence Report</h2>
            <table class="table table-striped table-responsive">
              <thead>
                <tr>
                  <th>S.N</th>
                  <th>Name</th>
                  <th>Date</th>
                  <th>Attendence Status</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>1</td>
                  <td>Prabin Baral</td>
                  <td>2022-06-02</td>
                  <td class="text text-danger">Present</td>
                </tr>
              </tbody>
            </table>
    </div>
</body>
</html>