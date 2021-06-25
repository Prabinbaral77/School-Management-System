<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    .data span{
        color:blue;
    }
    .info-container{
        text-align:center;
        margin:30px;
    }
    .data{
        margin-bottom:20px;
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
                    <label for="borrow_date">Borrowed Date:{{$data[0]->borrowed_date}}</label>
                </div>
             
             <div class=" data info-container">
                <div class=" data student-name">
                    <label for="name-student">Student Name: </label>
                    <span>{{studentName($data[0]->student_id)}}</span>
                </div>
                <div class=" data student-class">
                    <label for="name-student">Student Class: </label>
                    <span>{{studentGrade($data[0]->student_id)}}</span>
                </div>
                <div class=" data student-roll">
                    <label for="name-student">Student Roll No: </label>
                    <span>{{studentRoll($data[0]->student_id)}}</span>
                </div>
                <div class=" data student-number">
                    <label for="name-student">Student Number: </label>
                    <span>{{studentNumber($data[0]->student_id)}}</span>
                </div>
                <div class=" data book-name">
                  <label for="book-name">Book Name: </label>
                  <span>{{bookName($data[0]->book_id)}}</span>
                </div>
                <div class="data author-name">
                 <label for="author_name">Author Name: </label>
                 <span>{{$data[0]->author_name}}</span>
                </div>
                <div class=" data quantity">
                <label for="quantity">Quantity: </label>
                <span>{{$data[0]->qty}}</span>
                </div>
             </div>
    </div>
</body>
</html>