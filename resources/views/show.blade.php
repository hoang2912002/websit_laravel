<h1>
    Bạn đã nhập {{ $a }}
   @for ($i = 0; $i < $a; $i++)
       {{$i}}
       <br>
   @endfor  
    <!-- {{}} ở trong .blade là để in ra như  echo  để code cho nhàn hơn-->
</h1>