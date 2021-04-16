script>
      $('#search').on('keyup',function(){
      $value=$(this).val();
      $.ajax({
      type: 'GET',
      url : "{{ route('student.attendenceSearch')}}",
      data:{'search':$value},
      success:function(data){
      $('tbody').html(data);
      }
      });
    })
</script>
<script>
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>


if($request->ajax())
          {
             $output="";
             $attendee=DB::table('attendences')->where('attendence_date','LIKE','%'.$request->search."%")->where('grade_id',$id )->orderBy('student_id', 'desc');
               if($attendee)
               {
                 foreach ($attendee as $key => $attend) {
                    $output.='<tr>'.
                    '<td>'.$attend->grade_id.'</td>'.
                    '<td>'.$attend->student_id.'</td>'.
                    '<td>'.$attend->attendence_status.'</td>'.
                    '</tr>';
                   }
                 return Response($output);
                }
          }