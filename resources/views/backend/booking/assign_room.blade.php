<form action="" method="post">
    @csrf

    <table class="table">
        <tr>
            <th>Numero Chambre</th>
            <th>Action</th>
        </tr>

        @foreach ($room_numbers as $room_number)
            <tr>
                <td>{{$room_number->room_no}}</td>
                <td>
                    <a class="btn bg-primary" href="{{route('assign_room_store',[$booking->id,$room_number->id])}}"> <i class="lni lni-circle-plus"></i> </a>
                </td>
            </tr>
        @endforeach

    </table>
  
   
</form>